que=[[]]
res={}
ss=new XMLHttpRequest
ss.open("GET","examlist.php",true)
ss.onload=function(){
res=JSON.parse(this.responseText)

que=(res['data'])
console.log(res['data'])


for(x=0;x<que.length;x++){
var field=document.createElement("fieldset")
var legend=document.createElement("legend")
var text=document.createTextNode("Question "+(x+1))
legend.appendChild(text)
field.appendChild(legend)

var input = document.createElement("input");
input.type = "text";
input.id="input"+x
input.defaultValue=res['data'][x]['question']
input.name = "member";
input.readOnly=true
input.style="border:none;outline:none"


var zz1=document.createElement("span").appendChild(document.createTextNode(res['data'][x]['a']))
var ans1=document.createElement("input")
ans1.type="radio"
ans1.name="o"+x
ans1.value="a"

var zz2=document.createElement("span").appendChild(document.createTextNode(res['data'][x]['b']))
var ans2=document.createElement("input")
ans2.type="radio"
ans2.name="o"+x
ans2.value="b"

var zz3=document.createElement("span").appendChild(document.createTextNode(res['data'][x]['c']))
var ans3=document.createElement("input")
ans3.type="radio"
ans3.name="o"+x
ans3.value="c"

var zz4=document.createElement("span").appendChild(document.createTextNode(res['data'][x]['d']))
var ans4=document.createElement("input")
ans4.type="radio"
ans4.name="o"+x
ans4.value="d"


field.appendChild(input)
field.appendChild(document.createElement("br"))
field.appendChild(document.createElement("br"))
field.appendChild(ans1)
field.appendChild(zz1)

field.appendChild(zz2)
field.appendChild(ans2)
field.appendChild(document.createElement("br"))
field.appendChild(document.createElement("br"))
field.appendChild(zz3)
field.appendChild(ans3)
field.appendChild(zz4)
field.appendChild(ans4)

var div=document.createElement("div")
div.id="d1"
div.style="border:solid;"
div.appendChild(field)

const element = document.getElementById("div1");
element.appendChild(div);
element.appendChild(document.createElement("br"));

}

}
ss.send()
