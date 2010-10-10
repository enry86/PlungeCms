<div class="right">
<div class="title">
<h3>A case in interactive<br/> multi-objective optimization </h3> 
</div>
<div class="text">
<p>
In multi-objective optimization many measures (success criteria) are
available to the designer or decision maker and a comprehensive
combination of the measures into a single criterion is not possible,
because of either lack of knowledge, excessive costs, or a desire to adapt
the preferences to preliminary results.
Let’s consider planning for a vacation. You look for a cheap and good
quality hotel and you are prepared to deal with compromises: cheaper
hotels are typically related to poorer quality, at least in a free market.
Imagine that quality is measured by the  number of stars, as it is in many
European countries. You are reluctant to answer quantitative questions at
the beginning, such as &quot;How much  are you willing to pay for one more
quality star?&quot;, or &quot;By how much is quality more important than price for
you?&quot;.  This does not mean that you are not capable of finding preferred
solutions, but that these solutions have to be found by iterations, where
some possibilities are shown, judged, and the feedback acquired by the
support system (maybe a tourist agency in this case) to search for better
and better solutions according to your explicit and implicit preferences.
In more complex practical applications, the number of possible solutions
can be very large, and visualization comes to the rescue to help develop
insight about the problem, identify prototypes via clustering techniques,
and devise proper ways of looking at the original data.
</p>
</div>
<?php
        if ($index == 0) {
            echo '<div class="jump">';
            echo '<a href="#' . $next . '">';
            echo '<img src="images/jump.png" height="100" width="150" alt="Jump!"/>';
            echo '</a></div>';
        }
        if ($index != 0) include('cms-content/menu.php'); 
?>
</div>
<div class="image">
<img src="images/slides1/slide5.jpg" alt="slide1" height="600" width="400"/>
</div>

