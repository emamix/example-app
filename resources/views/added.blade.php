<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, height=device-height,  initial-scale=1.0, user-scalable=no;user-scalable=0" />
    @vite('resources/css/app.css')
    <title>VMLYR TIMESHEET</title>
    <script src="js/air-datepicker.js"></script>
    <link rel="stylesheet" href="js/air-datepicker.css">

    <style>
        body {
    overscroll-behavior: contain;
}
    </style>
</head>

<body class="bg-gray-900">
    <div class="mx-auto mt-10 right-0 w-80">
        <div class="bg-white rounded overflow-hidden shadow-lg">
            <div class="text-center p-6 bg-sky-600 border-b">
                <svg aria-hidden="true" role="img" class="h-24 w-24 text-white mx-auto" width="32" height="32"
                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 243.19 242.66">
                    <path fill="white" d="M684.55,1096.64c0,5.18,0,10.36,0,15.53a4.12,4.12,0,0,1-1.35,3.26q-50.55,50.35-101,100.76c-1.76,1.76-1.76,1.76-.06,3.45q50.51,50.38,101,100.76a4.22,4.22,0,0,1,1.42,3.41c-.09,4.64-.06,9.28,0,13.93,0,1.1-.22,1.54-1.45,1.53-5-.08-9.91-.06-14.86,0a3,3,0,0,1-2.31-1q-6.44-6.46-12.9-12.89-44.37-44.27-88.71-88.56c-1.2-1.19-1.77-1-2.87,0q-50.52,50.51-101.1,101a4.44,4.44,0,0,1-3.56,1.51c-5.13-.12-10.26-.07-15.39-.09v-17.5a9.15,9.15,0,0,1,1.91-2.33l99.46-99.22c.38-.38.75-.77,1.14-1.14a1.07,1.07,0,0,0,0-1.81c-.39-.36-.76-.76-1.14-1.13l-99.45-99.22a9.33,9.33,0,0,1-1.92-2.33c0-5.6,0-11.2,0-16.79,0-.9.2-1.11,1.1-1.1,5.49.05,11,0,16.47,0a8.46,8.46,0,0,1,2,1.52q50.34,50.25,100.7,100.48a5.17,5.17,0,0,1,1.35,1.63,6.25,6.25,0,0,1,1.48-1.76l100.46-100.22a8.5,8.5,0,0,1,2.08-1.65Zm-243.13,87.15a8.69,8.69,0,0,0,1.79,2.21l30.5,30.42c1.66,1.66,1.66,1.67,0,3.33l-30.5,30.42a8.87,8.87,0,0,0-1.79,2.21V1287c.61-.18.93-.72,1.34-1.13q33.4-33.32,66.84-66.61c1.13-1.12,1.06-1.63,0-2.71q-33.45-33.27-66.83-66.61c-.41-.42-.88-.79-1.32-1.18Zm156.12-87.15a8.44,8.44,0,0,0-2.21,1.78l-30.59,30.52c-1.75,1.74-1.76,1.74-3.51,0l-30.59-30.52a8.44,8.44,0,0,0-2.21-1.78H493.7c.06.6.59.86.95,1.23q33.57,33.51,67.14,67c1,1,1.4.9,2.33,0q33.54-33.56,67.14-67c.37-.37.68-.81,1-1.21Zm-70.81,242.62a3.78,3.78,0,0,0,3-1.24c10.64-10.67,21.34-21.29,32-32,1.05-1.06,1.53-1,2.58,0,10.67,10.73,21.4,21.39,32.1,32.1a3.22,3.22,0,0,0,2.46,1.11c10.68,0,21.36,0,32,0,.4,0,.95.29,1.33-.5a9,9,0,0,1-.95-.74q-33.54-33.45-67-66.93c-1.07-1.07-1.55-.81-2.45.09q-33.37,33.34-66.79,66.66c-.37.37-.72.75-1.37,1.44C504.91,1339.24,515.82,1339.22,526.73,1339.26Zm156.93-189.73q-33.85,33.78-67.75,67.54c-.88.88-.55,1.25.12,1.92l67.37,67.17c.29.29.48.86,1.15.64,0-10.9,0-21.79,0-32.68a3.8,3.8,0,0,0-1.26-2.94c-10.7-10.62-21.35-21.3-32.07-31.91-1.06-1-1.07-1.55,0-2.6q16.14-16,32.18-32.05a2.76,2.76,0,0,0,1.14-2.08c0-11.13,0-22.26,0-33.79C684.08,1149.16,683.86,1149.34,683.66,1149.53Z" transform="translate(-441.4 -1096.61)" />
                </svg>
                <p class="pt-2 text-lg font-semibold text-gray-50">HOURS LOGGER</p>
            </div>
        <div id="cal"></div>

            <div class="mt-3 mb-3 space-y-2 w-full px-4 align-middle text-center">
                <div class="flex flex-wrap items-stretch w-full relative ">

                    <h1 id="date" class="flex-shrink flex-grow leading-normal w-px flex-1  h-10 border-grey-light rounded-lg rounded-l-none px-3 relative focus:border-sky-600">DAY LOGGED!</h1>
                </div>
                <div class="flex flex-wrap items-stretch w-full relative ">
                <a href="/">Go Back</a>
                </div>
            </div>
        </div>
    </div>

    <script>
    const localeEn = {
        days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
        daysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        daysMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
        months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October',
            'November', 'December'
        ],
        monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        today: 'Today',
        clear: 'Clear',
        dateFormat: 'MM/dd/yyyy',
        timeFormat: 'hh:mm aa',
        firstDay: 0
    }
    new AirDatepicker('#cal', {
        locale: localeEn,
        inline: true,
        autoClose: true,
        isMobile: true,
        position:'bottom center',
        selectedDates: [new Date()]
    });

    </script>
</body>

</html>
