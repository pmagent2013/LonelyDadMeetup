<script src="js/foundation/foundation.js"></script>
<script src="js/foundation/foundation.abide.js"></script>
<script src="js/foundation/foundation.alert.js"></script>

<div class="row">	
    <form name="createEvent" data-abide novalidate="novalidate" method="POST" action="index.php#CreateEvent">
        <fieldset>
          <legend>Event Details</legend>
          <div class="row">
            <div class="large-8 columns">
              <label>Event Name
                <input type="text" placeholder="Enter the name of the event" id="eventName" name="eventName" />
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-8 columns">
              <label>Select the type of event
                <select id="eventType" name="eventType">
                  <option value="default" disabled selected="true">Select Category</option>
                  <option value="beer">Beer Drinking</option>
                  <option value="ship">Boats</option>
                  <option value="car">Cars</option>
                  <option value="building">Construction</option>
                  <option value="home">Home Improvement</option>
                  <option value="pied-piper-alt">Hunting</option>
                  <option value="cutlery">Grilling/ Eating Meats</option>
                  <option value="wrench">Repairs</option>
                  <option value="linux">Taxidermy</option>
                  <option value="futbol-0">Sports Related</option>
                  <option value="question">Other</option>
                </select>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-3 columns">
              <label># of dads you wish to attend
              <input type="number" placeholder="#" id="numberOfDads" name="numberOfDads" />
            </div>
          </div>
          <div class="row">
            <div class="large-8 columns">
              <label>Information about Event
                <textarea placeholder="Enter the details about the event" id="eventInfo" name="eventInfo"></textarea>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-8 columns">
              <label>Tags
                <input type="text" placeholder="Enter tags for your event seperated by commas" id="tags" name="tags" />
              </label>
            </div>
          </div>
        </fieldset>  
        <fieldset>
        <legend>Location and Time of Event</legend>
        <div class="row">
           <div class="small-12 columns">
            <div class="small-4 column">
            Month<select value=<?php echo date("m"); ?> id="month" name="month">Select Month</option>
            <option value='01'>January</option>
            <option value='02'>February</option>
            <option value='03'>March</option>
            <option value='04'>April</option>
            <option value='05'>May</option>
            <option value='06'>June</option>
            <option value='07'>July</option>
            <option value='08'>August</option>
            <option value='09'>September</option>
            <option value='10'>October</option>
            <option value='11'>November</option>
            <option value='12'>December</option>
            </select>
            </div>
            <div class="small-4 column"> 
            Date<select name="day" id="day" value=<?php echo date("d"); ?>>
            <option value='01'>01</option>
            <option value='02'>02</option>
            <option value='03'>03</option>
            <option value='04'>04</option>
            <option value='05'>05</option>
            <option value='06'>06</option>
            <option value='07'>07</option>
            <option value='08'>08</option>
            <option value='09'>09</option>
            <option value='10'>10</option>
            <option value='11'>11</option>
            <option value='12'>12</option>
            <option value='13'>13</option>
            <option value='14'>14</option>
            <option value='15'>15</option>
            <option value='16'>16</option>
            <option value='17'>17</option>
            <option value='18'>18</option>
            <option value='19'>19</option>
            <option value='20'>20</option>
            <option value='21'>21</option>
            <option value='22'>22</option>
            <option value='23'>23</option>
            <option value='24'>24</option>
            <option value='25'>25</option>
            <option value='26'>26</option>
            <option value='27'>27</option>
            <option value='28'>28</option>
            <option value='29'>29</option>
            <option value='30'>30</option>
            <option value='31'>31</option>
            </select>
            </div>
            <div class="small-4 column"> 
            Date<select name="year" id="year" value=<?php echo date("d"); ?>>
            <option value='2015'>2015</option>
            <option value='2016'>2016</option>
            <option value='2017'>2017</option>
            <option value='2018'>2018</option>
            <option value='2019'>2019</option>
            <option value='2020'>2020</option>
            </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="small-12 columns">
            <div class="small-4 column"> 
              Hour<select name="hour" id="hour">
              <option value='01'>01</option>
              <option value='02'>02</option>
              <option value='03'>03</option>
              <option value='04'>04</option>
              <option value='05'>05</option>
              <option value='06'>06</option>
              <option value='07'>07</option>
              <option value='08'>08</option>
              <option value='09'>09</option>
              <option value='10'>10</option>
              <option value='11'>11</option>
              <option value='12'>12</option>
              </select>
            </div>
            <div class="small-4 column"> 
              Minute<select name="minute" id="minute">
              <option value='00'>00</option>
              <option value='01'>01</option>
              <option value='02'>02</option>
              <option value='03'>03</option>
              <option value='04'>04</option>
              <option value='05'>05</option>
              <option value='06'>06</option>
              <option value='07'>07</option>
              <option value='08'>08</option>
              <option value='09'>09</option>
              <option value='10'>10</option>
              <option value='11'>11</option>
              <option value='12'>12</option>
              <option value='13'>13</option>
              <option value='14'>14</option>
              <option value='15'>15</option>
              <option value='16'>16</option>
              <option value='17'>17</option>
              <option value='18'>18</option>
              <option value='19'>19</option>
              <option value='20'>20</option>
              <option value='21'>21</option>
              <option value='22'>22</option>
              <option value='23'>23</option>
              <option value='24'>24</option>
              <option value='25'>25</option>
              <option value='26'>26</option>
              <option value='27'>27</option>
              <option value='28'>28</option>
              <option value='29'>29</option>
              <option value='30'>30</option>
              <option value='31'>31</option>
              <option value='32'>32</option>
              <option value='33'>33</option>
              <option value='34'>34</option>
              <option value='35'>35</option>
              <option value='36'>36</option>
              <option value='37'>37</option>
              <option value='38'>38</option>
              <option value='39'>39</option>
              <option value='40'>40</option>
              <option value='41'>41</option>
              <option value='42'>42</option>
              <option value='43'>43</option>
              <option value='44'>44</option>
              <option value='45'>45</option>
              <option value='46'>46</option>
              <option value='47'>47</option>
              <option value='48'>48</option>
              <option value='49'>49</option>
              <option value='50'>50</option>
              <option value='51'>51</option>
              <option value='52'>52</option>
              <option value='53'>53</option>
              <option value='54'>54</option>
              <option value='55'>55</option>
              <option value='56'>56</option>
              <option value='57'>57</option>
              <option value='58'>58</option>
              <option value='59'>59</option>
              </select>
            </div>
            <div class="small-4 column"> 
              AM/PM<select name="ampm" id="ampm">
              <option value='AM'>AM</option>
              <option value='PM'>PM</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="large-6 columns">
            <label>Street Address
              <input type="text" placeholder="Enter Street Address" id="address" name="address" />
            </label>
          </div>
        </div>
        <div class="row">
          <div class="large-6 columns">
            <label>City
              <input type="text" placeholder="Enter City" id="city" name="city" />
            </label>
          </div>
        </div>
        <div class="row">
          <div class="large-2 columns">
              <label>State
                <select name="state" id="state">
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NV">Nevada</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WA">Washington</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>
                </select>
              </label>
            </div>
          </div>
          <div class="row">
          <div class="large-2 columns">
            <label>Zip Code
              <input type="number" placeholder="Enter Zip Code" name="zipCode" id="zipCode" />
            </label>
          </div>
         </div>
        </fieldset>
        <input name="addEvent" type="submit" class="button small radius" value="Submit" />
      </form>
</div>
