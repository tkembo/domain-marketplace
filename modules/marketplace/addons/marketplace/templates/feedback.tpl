<!-- feedback.tpl -->
<div class="feedback-form">
    <h2>Leave Feedback for Auction: {$auction.title}</h2>
    <form action="feedback.php" method="post">
        <label for="rating">Rating:</label>
        <input type="number" name="rating" min="1" max="5">
        <label for="comments">Comments:</label>
        <textarea name="comments"></textarea>
        <input type="submit" value="Submit Feedback">
    </form>
</div>
