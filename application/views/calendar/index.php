<?php $this->load->view('templates/header');?>
<style type="text/css">
  .fc-sun { color:red;  }
  .fc-ltr .fc-dayGrid-view .fc-day-top .fc-day-number {
    float: none;
  }
  .fc-day-top { text-align: center!important; }
</style>
<div class="container">
  <span id="load-calendar"></span>
</div>
<?php $this->load->view('templates/footer');?>

<script>
  // $("#IDDIV").load('<?php echo base_url('event/loadEventData') ?>');
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('load-calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
    // load plugins
    plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list', 'momentTimezonePlugin', 'momentPlugin'],  
    firstDay: 1,
    locale: 'id',  
    timeZone: 'local',  
    selectable: true,
    selectHelper: true,
    displayEventTime: true, // don't show the time column in list view
    buttonIcons: true, // show the prev/next text
    weekNumbers: false,
    navLinks: true, // can click day/week names to navigate views
    editable: false,
    eventLimit: true, // allow "more" link when too many events
    // calendar header
    header: {
      left: 'prevYear, prev,next, nextYear, today',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
    },
    // change button text
    buttonText: {
      today: "Today",  
      month: "Month",
      week: "Week",
      day : "Day",
      listMonth: 'List'
    },
    eventSources: [
        {
            url: "<?php echo base_url();?>event/loadEventData",
            dataType : 'jsonp',
            className: 'feed_two',  
        }
    ],
    eventClick: function(info) {
      // alert('Agenda: ' + info.event.title); 
      Swal.fire(info.event.title, 'Waktu : ' + info.event.start, 'info');
    }
    });

    calendar.render();
  });
</script>