<!DOCTYPE html>
<html>

<head>

   <title>Login Form</title>
   <meta charset="utf-8" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
   integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
   crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="/css/main.css">
   


</head>

<body>
 <section class="container">
       <div class="form-group col-md-6" id="back" >
           <div class="form-group col-md-3" id="signUpBack">
               <div class="form-group" >  
               <h2 class="text-primary text-center">Don't have an account?</h2>
                </div>  
                <div class="form-group" id= "signText">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
               </div>
               <div class="form-group" >
               <button type="submit" class="btn btn-primary" id="mainButton1">SIGN UP</button>
           </div>        
           </div class="form-group" >
           <div class="form-group col-sm-3" id="loginBack">
               <h2 class="text-primary text-center">Have an account?</h2>
               <div class="form-group" id= "loginText">
               <p>Lorem ipsum dolor sit atmet consectuter edipisicing elit</p>
               </div>
               <button type="submit" class="btn btn-primary" id="mainButton2">LOGIN</button>                    
           </div>
           </div>
       </div>
       <div class="changing">
            <div class="form-group col-sm-6" id="main1" > 
            <form method="POST" action="/login">   
            {{ csrf_field() }}    
                <h2>Login</h2>            
                <input id="email" class="form-control"  type="email"
                     placeholder="Email* &#x2709" name="email">
                     <div class="status"></div>
                <input id="password" class="form-control" type="password"
                    placeholder="Password* &#x1f512" name="password">
                <button type="submit" class="btn btn-primary">LOGIN</button>
                <button type="submit" class="btn btn-secondary" id="forgot">Forgot?</button>
                </form>
        </div>          
             
        <div class="form-group col-sm-6" id="main2"> 
        <form method="POST" action="/register">   
            {{ csrf_field() }} 
            <h2>Sign Up</h2>
            <input id="name" class="form-control" type="text" placeholder="Name* &#9731" name="name">
            <input id="email" class="form-control"  type="email"
                placeholder="Email* &#x2709" name="email">
                <div class="status"></div>
            <input id="password" class="form-control" type="password"
                placeholder="Password* &#x1f512" name="password">
            <button type="submit" class="btn btn-primary">SIGN UP</button>
            </form>
        </div> 
    </div>  
         
         
 </section>

   <footer class="container">
       <div class="form-group col-sm-6">
            <p class="col-sm-4">&copy; All Rigts reserved "Jānis" 2018</p>
       </div>
   </footer> -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="/js/main.js" type="text/javascript"></script>

</body>

</html>