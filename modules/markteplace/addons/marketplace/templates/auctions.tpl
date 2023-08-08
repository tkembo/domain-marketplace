<!-- auctions.tpl -->
<div class="auctions-list">
    {foreach from=$auctions item=auction}
        <div class="auction-item">
            <h3>{$auction.title}</h3>
            <p>Starting Price: {$auction.starting_price}</p>
            <p>End Time: {$auction.end_time}</p>
            <a href="bid.php?auction_id={$auction.id}">Place Bid</a>
        </div>
    {/foreach}
</div>
