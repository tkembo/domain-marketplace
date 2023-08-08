<!-- view-auction.tpl -->
<div class="auction-details">
    <h2>{$auction.title}</h2>
    <p>Description: {$auction.description}</p>
    <p>Starting Price: {$auction.starting_price}</p>
    <p>Current Bid: {$auction.current_bid}</p>
    <form action="bid.php" method="post">
        <input type="number" name="amount" placeholder="Your Bid">
        <input type="submit" value="Place Bid">
    </form>
</div>
