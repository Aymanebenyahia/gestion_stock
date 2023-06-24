<!DOCTYPE html>
<html>
   <head>
      <title>Bootstrap Example</title>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   </head>
   <body>
    <h2>Form Add New Purchase</h2>
    <br>
      <form class = "form-horizontal" role = "form">
         <div class = "form-group">
            <label for = "productname" class = "col-sm-2 control-label">product Name</label>
            <div class = "col-sm-10">
               <input type = "text" class = "form-control" id = "productname" placeholder = "Enter product Name">
            </div>
            <br>
         </div>
         <div class = "form-group">
            <label for = "lastname" class = "col-sm-2 control-label">Category</label>
            <div class = "col-sm-10">
               <input type = "text" class = "form-control" id = "lastname" placeholder = "Category">
            </div>
            <br>
         </div>
         <div class = "form-group">
            <label for = "lastname" class = "col-sm-2 control-label">N°Facture</label>
            <div class = "col-sm-10">
               <input type = "text" class = "form-control" id = "lastname" placeholder = "n° Facture">
            </div>
            <br>
            <div class = "form-group">
                <label for = "productname" class = "col-sm-2 control-label"> Price TTC</label>
                <div class = "col-sm-10">
                   <input type = "text" class = "form-control" id = "productname" placeholder = "Price TTC">
                </div>
                <br>
             </div>
             <div class = "form-group">
                <label for = "lastname" class = "col-sm-2 control-label">Date Enter</label>
                <div class = "col-sm-10">
                   <input type = "text" class = "form-control" id = "lastname" placeholder = "Date Enter">
                </div>
                <br>
             </div>
             <div class = "form-group">
                <label for = "lastname" class = "col-sm-2 control-label">Fournisseur</label>
                <div class = "col-sm-10">
                   <input type = "text" class = "form-control" id = "lastname" placeholder = "Fournissuer Name">
                </div>
            
                <br>
                    <button type="button" class="btn btn-rounded btn-primary" style="margin: 15px">Add Purchase</button>    
                    
</div>
         
          
      </form>
   </body>
</html>