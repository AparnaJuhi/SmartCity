const express= require("express");
const bodyParser=require("body-parser");
const app=express();
var v1,v2;
app.use(bodyParser.urlencoded({extended:true}));
app.get("/Login",function(req,res){
  res.sendFile(__dirname+"/Create_Account.html");
});
app.post("/SignUp",function(req,res){
  v1=req.body.FirstName;
  v2=req.body.LastName;
  //console.log(v2+v1);
  res.send(" Name:"+v1+" "+v2);
})
app.listen(3000,function(){
  console.log("Server running....");
 });
// app.get("/SignUp",function(request,response){
//   console.log(v1+v2);
//   response.send("t "+v1+v2);
// });
