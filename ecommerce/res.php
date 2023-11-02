<?php
print_r($_POST);
require 'config.php'; // Include your Stripe configuration file.
 \Stripe\Stripe::setVerifySslCerts(FALSE);

// Check if the request method is POST.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the Stripe token from the form.
    $token = $_POST['stripeToken'];

    // Initialize the Stripe API with your secret key.
    \Stripe\Stripe::setApiKey($Secretkey);

    try {
        // Create a charge using the Stripe API.
        $charge = \Stripe\Charge::create([
            'amount' => 50000,      // The amount in cents (e.g., 500 cents for $5.00).
            'currency' => 'inr',  // The currency (Indian Rupees).
            'description' => 'Payment for a product or service',
            'source' => $token,  // The Stripe token obtained from the form.
        ]);

        // Process the charge and print the response.
        echo "Payment successful! Charge ID: " . $charge->id;
        print_r($charge);
    } catch (\Stripe\Exception\CardException $e) {
        // Handle card-related errors.
        echo "Card error: " . $e->getMessage();
    } catch (\Stripe\Exception\RateLimitException $e) {
        // Handle rate limit-related errors.
        echo "Rate limit error: " . $e->getMessage();
    } catch (\Stripe\Exception\InvalidRequestException $e) {
        // Handle invalid request errors.
        echo "Invalid request error: " . $e->getMessage();
    } catch (\Stripe\Exception\AuthenticationException $e) {
        // Handle authentication errors.
        echo "Authentication error: " . $e->getMessage();
    } catch (\Stripe\Exception\ApiConnectionException $e) {
        // Handle API connection errors.
        echo "API connection error: " . $e->getMessage();
    } catch (\Stripe\Exception\ApiErrorException $e) {
        // Handle other Stripe API errors.
        echo "Stripe API error: " . $e->getMessage();
    } catch (Exception $e) {
        // Handle generic errors.
        echo "Error: " . $e->getMessage();
    }
} else {
    // Handle non-POST requests or direct script access.
    echo "Invalid request method.";
}
