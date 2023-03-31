<!-- Modal -->
<div style="opacity: 70%;" class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Set Alarm</h5>
      </div>
      <div class="modal-body">


    <!-- External CSS File -->
    <link rel="stylesheet" href="Alarm/styles.css">

      <body onload="initClock()">

    <div class="alarm">

        <div class="datetime">
            <div class="date">
                <span id="dayName">Day</span>,
                <span id="month">Month</span>,
                <span id="dayNum">00</span>,
                <span id="year">Year</span>
            </div>
            <div class="time">
                <span id="hour">00</span>:
                <span id="minutes">00</span>:
                <span id="seconds">00</span>:
                <span id="period">AM</span>
            </div>
            <button id="stopAlarm" onclick="stopAlarm()">Stop Alarm</button>
        </div>

        <hr>

        <div class="setAlarm">

            <div class="column">
                <select>
                    <option value="setHour" selected hidden>Hour</option>
                </select>
            </div>

            <div class="column">
                <select>
                    <option value="setMinute" selected hidden>Minute</option>
                    
                </select>
            </div>

            <div class="column">
                <select>
                    <option value="AM/PM" selected hidden>AM/PM</option>
                </select>
            </div>

            <button class="btn btn-sm" style="color: white; background: #07179a;" id="btn-setAlarm" type="submit">Set Alarm</button>
            
        </div>

        <h3 id="alarm-h3"></h3>

        <div class="alarmList">
                
            
        </div>

        
    </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    <!-- External Javascript File -->
    <script src="Alarm/script.js"></script>