# Domain Marketplace Add-on

This repository contains the source code for the Domain Marketplace add-on, a module that integrates with WHMCS for domain auction functionality.

## Features

### Domain Listing
- View important domain auction details such as domain name, starting bid, current highest bid, and end time of the auction.

### Bidding Process
- Transparent bidding with minimum increase amount for each new bid.
- Feature to handle tie bids.
- "Buy Now" option allowing users to immediately purchase the domain without waiting for the auction to end.

### Auction Duration
- Set a specific duration for each auction.
- Sellers have the flexibility to select their preferred duration.

### Start and End Times
- Immediate auction commencement or schedule a specific start time as per seller's choice.
- Automatic auction closure at the end time.
- Highest bid at the end time wins the auction, ensuring a seamless process for bidders and sellers.

### Bidder Communication
- Real-time notifications for bidders when they are outbid.
- Instant alerts for auction winners.

### Currency Support
- Multi-currency bidding support.
- Bidders can view and bid in their preferred currency while sellers list in theirs.

### User Balance Management
- Real-time tracking of user balances.
- Prompt alerts when a user's balance goes below the required minimum during an active bid.
- Automatic balance updates after the conclusion of an auction.

### Seller Commission/Fees
- Commission or listing fees for sellers.
- Clear information about the charges and the mechanism for their deduction.

### User Interface
- Intuitive and user-friendly design, ensuring a smooth experience for both sellers and bidders.

### Privacy and Security
- Advanced privacy settings to protect bidder identities.
- SSL enforcement for all auction-related pages, ensuring secure transactions.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-github-username/domain-marketplace.git

   Of course! I'll draft a more detailed README.md for you, based on the original questions you provided.

   markdown
   Copy code
   # Domain Marketplace Add-on

   This repository contains the source code for the Domain Marketplace add-on, a module that integrates with WHMCS for domain auction functionality.

   ## Features

   ### Domain Listing
   - View important domain auction details such as domain name, starting bid, current highest bid, and end time of the auction.

   ### Bidding Process
   - Transparent bidding with minimum increase amount for each new bid.
   - Feature to handle tie bids.
   - "Buy Now" option allowing users to immediately purchase the domain without waiting for the auction to end.

   ### Auction Duration
   - Set a specific duration for each auction.
   - Sellers have the flexibility to select their preferred duration.

   ### Start and End Times
   - Immediate auction commencement or schedule a specific start time as per seller's choice.
   - Automatic auction closure at the end time.
   - Highest bid at the end time wins the auction, ensuring a seamless process for bidders and sellers.

   ### Bidder Communication
   - Real-time notifications for bidders when they are outbid.
   - Instant alerts for auction winners.

   ### Currency Support
   - Multi-currency bidding support.
   - Bidders can view and bid in their preferred currency while sellers list in theirs.

   ### User Balance Management
   - Real-time tracking of user balances.
   - Prompt alerts when a user's balance goes below the required minimum during an active bid.
   - Automatic balance updates after the conclusion of an auction.

   ### Seller Commission/Fees
   - Commission or listing fees for sellers.
   - Clear information about the charges and the mechanism for their deduction.

   ### User Interface
   - Intuitive and user-friendly design, ensuring a smooth experience for both sellers and bidders.

   ### Privacy and Security
   - Advanced privacy settings to protect bidder identities.
   - SSL enforcement for all auction-related pages, ensuring secure transactions.

   ## Installation

   1. Clone the repository:
      ```bash
      git clone https://github.com/your-github-username/domain-marketplace.git
      ```
   2. Navigate to the project directory:

   ```bash
   cd domain-marketplace
   ```

  3.  Install the necessary dependencies using Composer:

   ```bash
   composer install
   ```

   4. Follow the WHMCS module installation procedure to set up the add-on.

   ## Testing
   We use PHPUnit for testing. After setting up, you can run the tests using:

   ```bash
   ./vendor/bin/phpunit --configuration tests/whmcs_module_phpunit.xml
   ```

   ## Contributing
   Contributions are welcome! Please read our CONTRIBUTING.md guide if you're interested in helping out.

   ## Support
   If you have any questions or issues with the add-on, please raise an issue in this GitHub repository.
