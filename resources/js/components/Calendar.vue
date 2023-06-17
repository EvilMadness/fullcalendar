<template>
    <div class="container">
        <full-calendar :options="calendarOptions"/>
    </div>
</template>

<script>
import FullCalendar from "@fullcalendar/vue3"
import dayGridPlugin from "@fullcalendar/daygrid"
import interactionPlugin from "@fullcalendar/interaction"
import timeGrid from "@fullcalendar/timegrid"
import esLocale from '@fullcalendar/core/locales/es';

export default {
    components: {
        FullCalendar
    },
    data: () => ({
        calendarOptions: {
            plugins: [ dayGridPlugin, interactionPlugin, timeGrid ],
            initialView: 'timeGridWeek',
            headerToolbar: {
                left: 'prev,next,today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            locale: esLocale,
            slotMinTime: "08:00:00",
            slotMaxTime: "20:00:00",
            allDaySlot: false,
            height: "auto",
            slotLabelFormat: {
                hour: '2-digit',
                minute: '2-digit',
            },
            events: []
        }
    }),
    created() {
        this.getEvents();
    },
    methods: {
        getEvents(){
            axios.get(`api/eventos`).then(response => {
                this.calendarOptions.events = response.data.eventos
            })
        }
    }
}
</script>
