@extends('layouts.vertical', ['title' => 'Calendar'])

@section('content')
@include("layouts.shared.page-title", ["subtitle" => "Apps", "title" => "Calendar"])

    <div class="container mt-4">
        <div id="calendar" style="max-width: 900px; margin: 40px auto;"></div>
    </div>
@endsection

@section('script')
    <!-- FullCalendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet" />

    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },

                selectable: true,
                dateClick: function(info) {
                    alert('Clicked on date: ' + info.dateStr);
                },
                eventClick: function(info) {
                    alert('Event: ' + info.event.title);
                }
            });

            calendar.render();
        });
    </script>
@endsection
