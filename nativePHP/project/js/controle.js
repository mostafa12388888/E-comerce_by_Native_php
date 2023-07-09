$(document).ready(
    function(){
        var value;
        $('.increment-btn').click(function(e){
            e.preventDefault();
           
            var qty=$(this).closest('.product-data').find('.input-qty').val();
             value=parseInt(qty,11);
            value=isNaN(value)?0:value;
            value++;
            $(this).closest('.product-data').find('.input-qty').val(value);
        })
        $('.decrement-btn').click(function(e){
            e.preventDefault();
           
            var qty=$(this).closest('.product-data').find('.input-qty').val();
            
            value=parseInt(qty,11);
          
            value=isNaN(value)?0:value;
            value--;
            $(this).closest('.product-data').find('.input-qty').val(value);
        })
        $(document).on("click",".updateQty",function(){
            var myxml=new XMLHttpRequest();
    myxml.onreadystatechange=function(){
        if(this.readyState===4 && this.status==200){
      console.log(this.responseText);}
    }
    myxml.open("POST","project_function/number.php",true);
myxml.setRequestHeader("content-type","application/x-www-form-urlencoded");
myxml.send(`number=${value}`);
        })
    }
);
let category=document.querySelectorAll('#catagories li');
let proudect=document.querySelectorAll("#catagoriesDIV");
let proudectchild=document.querySelectorAll(`.catagoriesDIV div.catagory-name`);
let iconl=document.querySelectorAll('div.icon i');
let like=document.querySelector('ul.nav-right li span');

category.forEach((li)=>{
  
li.addEventListener('click',()=>{
 control=0;
proudect.forEach((st)=>{
    let proudectchild=document.querySelectorAll(`.catagoriesDIV div.catagory-name`)[control++];
   
    let comp1=li.innerText.split(' ').join("");
    let comp2=proudectchild.innerText.split(' ').join("");
   if(comp1.toUpperCase().trim() == comp2.toUpperCase().trim()){
    st.style.display="grid";
   }else{
    st.style.display="none";
   };
})
})});
console.log(like);
iconl.forEach((i)=>{
    
    i.addEventListener('click',()=>{
        let val=i.getAttribute("data");
       let valueLike=parseInt(like.innerText);
    // console.log(i.color)
        if(i.style.color=="red"){
            i.style.color="black";
            valueLike--;
        }else{
            i.style.color="red";
            valueLike++;
        };
        like.innerText=valueLike;
        console.log(like.innerText)
        var lke =new XMLHttpRequest();
        lke.onreadystatechange=function(){
            if(this.readyState===4&& this.status==200){console.log(this.responseText);}
        
        };
        lke.open("POST","project_function/lkeoptions.php");
        lke.setRequestHeader("content-type","application/x-www-form-urlencoded");
        // console.log(val);
        lke.send(`id=${val}`);
        
    })
});

let divs=document.querySelectorAll("li.active");
let photo=document.querySelectorAll("td.si-pic");
let price=document.querySelectorAll(".product-selected p");
let name6=document.querySelectorAll(".product-selected h6");
let TOTAL=document.querySelector(".select-total h5");
divs.forEach((d)=>{
d.addEventListener("click",()=>{
    counterV=0,countH=0;
var value= d.getAttribute("data");
var addProduct=new XMLHttpRequest();
addProduct.onreadystatechange=function(){
if(this.readyState===4 && this.status===200){
    let obj=JSON.parse(this.responseText);

    name6.forEach((ele)=>{
        
    if(ele.innerHTML===obj['name'])
    {
        console.log(obj['price']+"*"+obj['number']);
        console.log("BEFOR",price[counterV].innerHTML);
        price[counterV].innerHTML=obj['price']+"$x"+obj['number'];
        console.log("aftER",price[counterV].innerHTML);
        TOTAL.innerHTML+=obj['price'];
        countH++;
    }
counterV++;
});
if( countH==0){
    let tbody=document.querySelector('#tbody');
    let tr=document.createElement('tr');
    tbody.appendChild(tr);
    tr.innerHTML=` <td class="si-pic"><img src="../lumino/pictuers/${obj['img']}" style="width:110px;" alt=""></td>
    <td class="si-text">
    <div class="product-selected">
        <p>
        ${obj['price']}$X${obj['number']}
       </p>
        <h6>${obj['name']}</h6>
    </div>
</td>
<td class="si-close">
<a href="project_function/deletcarts.php?id=${value}" class="btn-dangers"><i class="ti-close"></i></a>
</td>`;
    TOTAL.innerHTML+=obj['price'];
}
}
};
addProduct.open("POST","project_function/purchases.php",true);
addProduct.setRequestHeader(
"content-type","application/x-www-form-urlencoded"
);
addProduct.send(`id=${value}`);

} )
});
