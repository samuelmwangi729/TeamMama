# FastStkPush
First, create an empt laravel project



Install mpesa sdk from safaricom official github repo using composer, Use composer require safaricom/mpesa



Login to safaricom developers portal here https://developer.safaricom.co.ke/



Create a test application



To get the consumer key and consumer secret, in your developer portal,click my apps, select the app you created and you will see your consumer and secret key



Copy the Consumer key into your .env file in your empty laravel project as MPESA_CONSUMER_KEY='Your_Consumer_Key' Note:DO NOT USE THE SINGLE QUOTES. If your consumer key is HJ97bd7bHLH, then you will have MPESA_CONSUMER_KEY=HJ97bd7bHLH



Follow step 7 for Your Consumer Secret, add it to your .env file as MPESA_CONSUMER_SECRET='Your_Consumer_Secret'



Set the mpesa environment either as live or sandbox in your .env file, for Testing purposes, you will have MPESA_ENV=sandbox and in Live Mode MPESA_ENV=live



Then in the config\app.php, add the mpesa provider \Safaricom\Mpesa\MpesaServiceProvider::class under providers and 'Mpesa'=> \Safaricom\Mpesa\MpesaServiceProvider::class for the aliases
