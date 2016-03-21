(function() {

    jQuery.unparam = function (value) {
        var
        // Object that holds names => values.
        params = {},
        // Get query string pieces (separated by &)
        pieces = value.split('&'),
        // Temporary variables used in loop.
        pair, i, l;

        // Loop through query string pieces and assign params.
        for (i = 0, l = pieces.length; i < l; i++) {
            pair = pieces[i].split('=', 2);
            // Repeated parameters with the same name are overwritten. Parameters
            // with no value get set to boolean true.
            params[decodeURIComponent(pair[0])] = (pair.length == 2 ?
                decodeURIComponent(pair[1].replace(/\+/g, ' ')) : true);
        }

        return params;
    };


    document.setCookie = function(name, value, expires, path, domain, secure)
    {
        document.cookie = name + "=" + $.param(value) +
            ((expires) ? "; expires=" + expires : "") +
            ((path) ? "; path=" + path : "") +
            ((domain) ? "; domain=" + domain : "") +
            ((secure) ? "; secure" : "");
    };
    
    document.getCookie = function(name)
    {
        var cookie = " " + document.cookie;
        var search = " " + name + "=";
        var setStr = null;
        var offset = 0;
        var end = 0;
        if (cookie.length > 0) {
            offset = cookie.indexOf(search);
            if (offset != -1) {
                offset += search.length;
                end = cookie.indexOf(";", offset)
                if (end == -1) {
                    end = cookie.length;
                }
                setStr = $.unparam(cookie.substring(offset, end));
            }
        }
        return(setStr);
    };

    // Assing this script when schedule calendar index page requested
    cms.init.add(['plugin_pages_scheduler_index'], function()
    { 
        var lastState = document.getCookie('pagesSchedulerState') || {
                view: 'month'
            },
            $fullcalendar = $('#calendar');
            
        var date = lastState.date
                        ? new Date(lastState.date * 1000)
                        : new Date();
        
        var dateYear = date.getFullYear(),
            dateMonth = date.getMonth(),
            dateDay = date.getDate();
        
        // build options
        var options = {
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: false,
            lazyFetching: false,
            disableResizing: true,
            defaultView: lastState.view,
            year: dateYear,
            month: dateMonth,
            date: dateDay,
            allDaySlot: false,
            
            events: function(start, end, callback)
            {
                var roundedStart = Math.round(start.getTime() / 1000),
                    roundedEnd = Math.round(end.getTime() / 1000);
                    
                $.ajax({
                    url: BASE_URL + ADMIN_DIR_NAME + '/plugin/pages_scheduler/feed',
                    dataType: 'json',
                    data: {
                        // our hypothetical feed requires UNIX timestamps
                        start: roundedStart,
                        end: roundedEnd
                    },
                    success: function(result) {
                        var events = [];
                        $(result).each(function(i, item) {
                            events.push({
                                title: item.title,
                                start: new Date(item.start * 1000),
                                url: item.url,
                                allDay: false
                            });
                        });
                        callback(events);
                    }
                });
                
                var state = {
                    date: Math.round($fullcalendar.fullCalendar('getDate').getTime() / 1000),
                    view: $fullcalendar.fullCalendar('getView').name
                };
                
                stateCookie = document.setCookie('pagesSchedulerState', state)
            }
        };
        
        if (window.__fullcalendarOptions) {
            $.extend(options, window.__fullcalendarOptions);
        }
        
        $fullcalendar.fullCalendar(options);
    }); // end

}());