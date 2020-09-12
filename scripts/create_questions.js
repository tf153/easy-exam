var addr=0;
var count=0;
jQuery("#btn-add-question").click(function(){
  count++;
  jQuery("#section-question").append(`
    <div class='questions' id='q`+addr+`'>
      <div class='delete-question' id='dlt-btn`+addr+`'onclick="rmv('#q`+(addr++)+`')">
        &#10060;
      </div>
      <span class="q">Q:</span>
      <textarea rows=4 class='question' name='ques[]' required placeholder='Enter your Question in this section.'></textarea>
      <br>
      <div class='options-div'>
        <div class='each-question'>
          A:
        	<textarea rows=2 class='options' name='optn[]' placeholder="Option A" required></textarea>
        </div>
        <div class='each-question'>
      	B:
      	<textarea rows=2 class='options' name='optn[]' placeholder="Option B" required></textarea>
        </div>
        <div class='each-question'>
      	C:
      	<textarea rows=2 class='options' name='optn[]' placeholder="Option C" required></textarea>
        </div>
        <div class='each-question'>
      	D:
      	<textarea rows=2 class='options' name='optn[]' placeholder="Option D" required></textarea>
        </div>
      	<br />
      </div>
      <span class='a'>Ans: </span>
      <input type='text' class='answer' name='ans[]' placeholder="A/B/C/D" required>
    </div>
  `);
});
function rmv(pos){
  jQuery(pos).remove();
  count--;
}

var tot_ques=setInterval(function(){
  jQuery("#tot-ques").text(`
    Total Ques =`+count);
},500);
