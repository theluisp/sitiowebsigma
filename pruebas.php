<html>
   <head>
   <script type="text/javascript">
      function visualiza_primero() {
         document.getElementById('primero').style.visibility='visible';
         document.getElementById('primero').style.display='block';
         document.getElementById('segundo').style.visibility='hidden';
         document.getElementById('segundo').style.display='none';
      };
      function visualiza_segundo() {
         document.getElementById('segundo').style.visibility='visible';
         document.getElementById('segundo').style.display='block';
         document.getElementById('primero').style.visibility='hidden';
         document.getElementById('primero').style.display='none';
      };
   </script>
   </head>
   <body>
      <p id="primero" style="visibility:visible; display:block;" onclick="visualiza_segundo()">primero</p>
      <p id="segundo" style="visibility:hidden; display:none;" onclick="visualiza_primero()">segundo</p>
   </body>
</html>