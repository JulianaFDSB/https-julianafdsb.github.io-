
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        locale: 'pt-br',
      //initialDate: '2019-04-01',
      editable: false,
      dayMaxEventRows: true,
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'listYear',
        //eventDisplay: 'block',
      },
      events: {
        url: 'list_eventos.php',
        display: 'auto',
        //format: 'php',
        failure: function() {
          document.getElementById('script-warning').style.display = 'block';
        },
        extraParams: function() {
          return{
            cachebuster: new Date().valueOf()
          };
        }
      },
      eventClick: function(info) {
        $('#visualizar #title').text(info.event.title);
        $('#visualizar #start').text(info.event.start.toLocaleString());
        $('#visualizar #end').text(info.event.end.toLocaleString());
         $('#visualizar').modal('show');

      },
    
      loading: function(bool) {
        document.getElementById('loading').style.display =
          bool ? 'block' : 'none';
      }
    });

    calendar.render();
  });

