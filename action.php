<html>
   <head>
      <link href="style2.css" rel="stylesheet">
   </head>
   <body>
      <div class="form">
      <table>
         <tr>
            <td colspan="3">
               <div class="title">
               Hello : <?php echo $_POST["name"]; ?>
            </td>
         </tr>
         <tr>
            <td>
               <div class="title2">
               Your registration no is 
            </td>
            <td>
               <div class="title2">
               : 
            </td>
            <td>
               <div class="title2">
               <?php echo $_POST["id"]; ?>
            </td>
         </tr>
         <tr>
            <td>
               <div class="title2">
               Your email address is 
            </td>
            <td>
               <div class="title2">
               : 
            </td>
            <td>
               <div class="title2">
               <?php echo $_POST["email"]; ?>
            </td>
         </tr>
         <tr>
            <td>
               <div class="title2">
               Your telephone no is 
            </td>
            <td>
               <div class="title2">
               : 
            </td>
            <td>
               <div class="title2">
               <?php echo $_POST["tp"]; ?>
            </td>
         </tr>
         <tr>
            <td>
               <div class="title2">
               Your course is 
            </td>
            <td>
               <div class="title2">
               : 
            </td>
            <td>
               <div class="title2">
               <?php echo $_POST["course"]; ?>
            </td>
         </tr>
      </table>
   </body>
</html>