<!DOCTYPE html>
<html>
<?php require('..\resources\partials\nav.php')?>

<h2> Frequently Asked Questions</h2>

    @foreach($faqs as $faq)
        <div class="box">
            {{ $faq->question }}
        </div>
        <h1>
            {{ $faq->answer }}
        </h1>
    @endforeach
</html>
