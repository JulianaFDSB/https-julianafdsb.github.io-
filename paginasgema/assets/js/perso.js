

  document.addEventListener('DOMContentLoaded', function() {
    var containerEl = document.getElementById('external-events-list');
    new FullCalendar.Draggable(containerEl, {
      itemSelector: '.fc-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText.trim()
        }
      }
    });
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        locale: 'pt-br',
      displayEventTime: true,
      selectable: true,
      select: function(info){
        //alert('Início do evento' + info.start.toLocaleString());
        $('#solicitacao #start').val(info.start.toLocaleString());
        $('#solicitacao #end').val(info.end.toLocaleString());
        $('#solicitacao').modal('show');
      },
      //initialDate: '2019-04-01',
      editable: false,
      droppable: true, // isso permite que as coisas sejam soltas no calendário
      dayMaxEventRows: true,
      /*eventOverlap: function(stillEvent, movingEvent) {
        return stillEvent.allDay && movingEvent.allDay;
      },*/
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: '',
        //eventDisplay: 'block',
        
      },
      eventClick: function(info) {
        if(info.event.id == 0){
        info.jsEvent.preventDefault();
        $('#solicitacao #id').text(info.event.id);
        $('#solicitacao').modal('show');

         
         /*alert('Event: ' + info.event.title);
          alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
          alert('View: ' + info.view.type);*/

      }
      else{
        //$('#visualizar #id').text(info.event.id);
        $('#visualizar #title').text(info.event.title);
        $('#visualizar #start').text(info.event.start.toLocaleString());
        $('#visualizar #end').text(info.event.end.toLocaleString());
         $('#visualizar').modal('show');

         
         /*alert('Event: ' + info.event.title);
          alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
          alert('View: ' + info.view.type);*/

      }
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
      /*drop: function(arg) {
          // if so, remove the element from the "Draggable Events" list
          arg.draggedEl.parentNode.removeChild(arg.draggedEl);
        },*/
    
      loading: function(bool) {
        document.getElementById('loading').style.display =
          bool ? 'block' : 'none';
      }/*,
      events: [
        {
          title: 'All Day Event',
          start: '2022-10-15'
        },
        {
          title: 'Long Event',
          start: '2022-10-23',
          end: '2022-10-27'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2022-10-31T16:00:00'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2022-10-16T16:00:00'
        }      
      ]*/
    });

    calendar.render();
  });

  //Mascara para o campo data e hora
function DataHora(evento, objeto) {
  var keypress = (window.event) ? event.keyCode : evento.which;
  campo = eval(objeto);
  if (campo.value == '00/00/0000 00:00:00') {
      campo.value = "";
  }

  caracteres = '0123456789';
  separacao1 = '/';
  separacao2 = ' ';
  separacao3 = ':';
  conjunto1 = 2;
  conjunto2 = 5;
  conjunto3 = 10;
  conjunto4 = 13;
  conjunto5 = 16;
  if ((caracteres.search(String.fromCharCode(keypress)) != -1) && campo.value.length < (19)) {
      if (campo.value.length == conjunto1)
          campo.value = campo.value + separacao1;
      else if (campo.value.length == conjunto2)
          campo.value = campo.value + separacao1;
      else if (campo.value.length == conjunto3)
          campo.value = campo.value + separacao2;
      else if (campo.value.length == conjunto4)
          campo.value = campo.value + separacao3;
      else if (campo.value.length == conjunto5)
          campo.value = campo.value + separacao3;
  } else {
      event.returnValue = false;
  }
};
// Cadastro de evento do banco de dados
$(document).ready(function () {
  $("#addevent").on("submit", function (event) {
      event.preventDefault();
     $.ajax({
          method: "POST",
          url: "cad_event.php",
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function (retorna) {
              if (retorna['sit']) {
                  //$("#msg-cad").html(retorna['msg']);
                  location.reload();
              } else {
                  $("#msg-cad").html(retorna['msg']);
              }
          }
      })
  });
});


