// Future JavaScript will go here

$(document).ready(function(){


alert("sk");
      
      $(function allowDrop(ev) {

          ev.preventDefault();
          // ev.dataTransfer.dropEffect = "copy"
      })
      
      $(function drag(ev) {
          console.log("fire");
          console.log(ev.target.id);
          ev.dataTransfer.setData("text", ev.target.id);
      })
      
      $(function drop(ev) {
          ev.preventDefault();
          var data = ev.dataTransfer.getData("text");
          console.log(data);
          console.log(typeof data);
          ev.target.appendChild(document.getElementById(data));
      });
      
      $(function sub()
      {
       // alert("sk");
        var x, text;
        // Get the value of the input field with id="numb"
        x = document.getElementById("addLink").value;
        $('dD1').text(x);
        console.log(x);
        console.log(typeof x);


    });


});