<head>
<script>
function abc()
{
var arr=new Array("usepics/slide33.jpg","usepics/banner_big.jpg","usepics/slider-2.jpg","usepics/baby121.jpg","usepics/slider4.jpg");
var ind=eval(document.f1.h1.value);
document.img.src=arr[ind];
document.f1.h1.value=ind+1;
if(document.f1.h1.value==5)
{
document.f1.h1.value=0;
}
}
setInterval("abc()",3000);
</script>
</head>
<body>
<div id="RightPart" style="align: justify">
  <div id="Page"><img src="usepics/slide_3.jpg" alt="" width="669" height="310" name="img"/>
  <form name="f1">
  <input type="hidden" name="h1" value="0" />
  </form>
  <div><br/><center><h2><font face="Lucida Handwriting"  color="#00CCFF">Latest Fashion News</font></h2></center></div>
 <table border="0">
 <tr><td> 
<img src="usepics/news1.jpg" width="130" height="140"/>
</td>
<td colspan="2" style="align: justify">
<font face="Verdana" size="+1" color="#99CC33">
Bloggers Already Love This Brand-New Denim Collection</font><br>
<font face="Comic Sans MS"><strong>A new broom swept through Christian Dior on Monday afternoon, February 4, a modernist gale and a witty architectural take on fashion, in the first show for the celebrated French label by its de facto new couturier, British-born Bill Gaytten.
Angular, rippling with Pop Culture colors and cut in the twisting metallic shapes of architectural great Frank Gehry, this was a brand new Dior couture, but with a collection that powerfully worked the house's legendary atelier, while keeping enough of the inspired mania of its sacked designer, John Galliano.</strong></font></td>
</tr>
<tr><br><br>
<tr><td> 
<img src="usepics/trump.jpg" width="130" height="140"/>
</td>
<td colspan="2" style="align: justify">
<font face="Verdana" size="+1" color="#99CC33">
Why Ivanka Has Bowed Out Of Her Own Tour</font><br>
<font face="Comic Sans MS"><strong>IVANKA TRUMP has been clear about her reasons for pulling out of her forthcoming tour for the book she penned prior to her father, Donald, becoming president last year, telling People that she doesn't want it to become a conflict of interest having officially joined the Trump administration."I wrote it at a different time in my life, from the perspective of an executive and an entrepreneur, and the manuscript was completed before the election last November. Out of an abundance of caution, and to avoid the appearance of using my official role to promote the book, I will not publicise the book through a promotional tour or media appearances."</strong></font></td>
</tr>
<tr>

</tr>
</table>
  </div>
  </div>
  </body>