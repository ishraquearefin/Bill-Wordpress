<?php get_header();?>
<?php
$user_id = get_current_user_id();
$existing_organization = '';
$existing_city = '';
$existing_website = '';
$existing_address="";
$existing_zip="";
$existing_domain="";
$existing_country="";
$existing_vanity="";
$existing_fname="";
$existing_lname="";
$existing_payment_address="";
$existing_payment_zip="";
$existing_email="";
$existing_contact="";
$existing_payment_country="";
$existing_payment_city="";






if ( isset( $_POST['orgSubmit'] ) ) {

// Get form values.
        $image = $_FILES['image']['name'];


    // image file directory
        $target = "img/".basename($image);

        $organization = (!empty($_POST['organization'])) ? sanitize_text_field($_POST['organization']) : '';
        $domain = (!empty($_POST['domain'])) ? sanitize_text_field($_POST['domain']) : '';
        $city = (!empty($_POST['city'])) ? sanitize_text_field($_POST['city']) : '';
        $zip = (!empty($_POST['zip'])) ? sanitize_text_field($_POST['zip']) : '';
        $website = (!empty($_POST['website'])) ? sanitize_text_field($_POST['website']) : '';
        $vanity = (!empty($_POST['vanity'])) ? sanitize_text_field($_POST['vanity']) : '';
        $address = (!empty($_POST['address'])) ? sanitize_text_field($_POST['address']) : '';
        $country= (!empty($_POST['country'])) ? sanitize_text_field($_POST['country']) : '';
        $existing_organization= $organization;
        $existing_website = $website;
        $existing_city=$city;
        $existing_address=$address;
        $existing_zip=$zip;
        $existing_domain=$domain;
        $existing_country=$country;
        $existing_vanity=$vanity;


// Insert/Update the form values to user_meta table.
        wf_insert_update_user_meta($user_id, 'organization', $organization);
        wf_insert_update_user_meta($user_id, 'domain', $domain);
        wf_insert_update_user_meta($user_id, 'city', $city);
        wf_insert_update_user_meta($user_id, 'website', $website);
        wf_insert_update_user_meta($user_id, 'vanity', $vanity);
        wf_insert_update_user_meta($user_id, 'address', $address);
        wf_insert_update_user_meta($user_id, 'country', $country);
        wf_insert_update_user_meta($user_id, 'zip', $zip);
        wf_insert_update_user_meta($user_id, 'image', $image);

    }
else {

    $existing_organization = (get_user_meta($user_id, 'organization', true)) ? get_user_meta($user_id, 'organization', true) : '';
    $existing_city = (get_user_meta($user_id, 'city', true)) ? get_user_meta($user_id, 'city', true) : '';
    $existing_website = (get_user_meta($user_id, 'website', true)) ? get_user_meta($user_id, 'website', true) : '';
    $existing_address = (get_user_meta($user_id, 'address', true)) ? get_user_meta($user_id, 'address', true) : '';
    $existing_zip = (get_user_meta($user_id, 'zip', true)) ? get_user_meta($user_id, 'zip', true) : '';
    $existing_domain = (get_user_meta($user_id, 'domain', true)) ? get_user_meta($user_id, 'domain', true) : '';
    $existing_country = (get_user_meta($user_id, 'country', true)) ? get_user_meta($user_id, 'country', true) : '';
    $existing_vanity = (get_user_meta($user_id, 'vanity', true)) ? get_user_meta($user_id, 'vanity', true) : '';
}
if( isset( $_POST['paymentSubmit'] ) ) {


// Get form values.
    $fname = (!empty($_POST['first_name'])) ? sanitize_text_field($_POST['first_name']) : '';
    $lname = (!empty($_POST['last_name'])) ? sanitize_text_field($_POST['last_name']) : '';
    $payment_city = (!empty($_POST['paymentCity'])) ? sanitize_text_field($_POST['paymentCity']) : '';
    $payment_zip = (!empty($_POST['paymentZip'])) ? sanitize_text_field($_POST['paymentZip']) : '';
    $email = (!empty($_POST['email'])) ? sanitize_text_field($_POST['email']) : '';
    $contact = (!empty($_POST['contact'])) ? sanitize_text_field($_POST['contact']) : '';
    $payment_address = (!empty($_POST['paymentAddress'])) ? sanitize_text_field($_POST['paymentAddress']) : '';
    $payment_country= (!empty($_POST['paymentCountry'])) ? sanitize_text_field($_POST['paymentCountry']) : '';
    $existing_fname= $fname;
    $existing_lname = $lname;
    $existing_payment_city= $payment_city;
    $existing_payment_address=$payment_address;
    $existing_payment_zip=$payment_zip;
    $existing_contact=$contact;
    $existing_payment_country=$payment_country;
    $existing_email=$email;


// Insert/Update the form values to user_meta table.
    wf_insert_update_user_meta($user_id, 'first_name', $fname);
    wf_insert_update_user_meta($user_id, 'last_name', $lname);
    wf_insert_update_user_meta($user_id, 'paymentCity', $payment_city);
    wf_insert_update_user_meta($user_id, 'paymentZip', $payment_zip);
    wf_insert_update_user_meta($user_id, 'contact', $contact);
    wf_insert_update_user_meta($user_id, 'paymentAddress', $payment_address);
    wf_insert_update_user_meta($user_id, 'paymentCountry', $payment_country);

}
else{
        $existing_fname= ( get_user_meta( $user_id, 'first_name', true ) ) ? get_user_meta( $user_id, 'first_name', true ) : '';;
        $existing_lname = ( get_user_meta( $user_id, 'last_name', true ) ) ? get_user_meta( $user_id, 'last_name', true ) : '';;
        $existing_payment_city= ( get_user_meta( $user_id, 'paymentCity', true ) ) ? get_user_meta( $user_id, 'paymentCity', true ) : '';;
        $existing_payment_address=( get_user_meta( $user_id, 'payment_address', true ) ) ? get_user_meta( $user_id, 'payment-adress', true ) : '';;
        $existing_payment_zip=( get_user_meta( $user_id, 'paymentZip', true ) ) ? get_user_meta( $user_id, 'paymentZip', true ) : '';;
        $existing_contact=( get_user_meta( $user_id, 'contact', true ) ) ? get_user_meta( $user_id, 'contact', true ) : '';;
        $existing_payment_country=( get_user_meta( $user_id, 'paymentCountry', true ) ) ? get_user_meta( $user_id, 'paymentCountry', true ) : '';;
        $existing_email=( get_user_meta( $user_id, 'email', true ) ) ? get_user_meta( $user_id, 'email', true ) : '';;



    }





?>
<?php if (is_user_logged_in()) {?>
<div class="container top">
    <div class="row">
        <div class="col-md-4">
           <div class="billingHeader">
               Billing Info
           </div>
        </div>
        <div class="col-md-4">

        </div>
        <div class="col-md-4">

        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="billingSentence">
            You do not have a subscription plan yet, Please visit our <a href="#">Price & Plan</a>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2 ">
                                    <div class="billingButton" id="companyButton">
                                        <span class="button-text">Company Details</span>
                                    </div>
                                </div>
                                <div class="col-md-2 offset-1">
                                    <div class="billingButton" id="paymentButton">
                                        <span class="button-text"> Payment SetUp</span>
                                    </div>

                                </div>
                                <div class="col-md-2 offset-1">
                                    <div class="billingButton" id="invoicesButton">
                                        <span class="button-text">Invoices</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="company">
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="billingSentence2">
                    Organization info
                </div>
            </div>
            <div class="col-md-2">
                <div class="billingEdit" id="organizationEdit">
                    Edit
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="billingLabel">
                                Organization Name
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="labelInfo">
                                <?php echo $existing_organization; ?>
                            </div>

                        </div>
                        <div class="col-md-5">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="billingLabel">
                                Domain
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="labelInfo">
                               <a href=""><?php echo $existing_domain; ?></a>, <a href="">Synesisit.com.bd</a>
                            </div>

                        </div>
                        <div class="col-md-5">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="billingLabel">
                                    Address
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="labelInfo">
                                <?php echo $existing_address; ?>
                            </div>

                        </div>
                        <div class="col-md-5">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="billingLabel">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="labelInfo">
                                <?php echo $existing_city; ?>
                            </div>

                        </div>
                        <div class="col-md-5">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="billingLabel">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="labelInfo">
                                <?php echo $existing_zip; ?>
                            </div>

                        </div>
                        <div class="col-md-5">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="billingLabel">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="labelInfo">
                                <?php echo $existing_country; ?>
                            </div>

                        </div>
                        <div class="col-md-5">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="billingLabel">
                                    Website
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="labelInfo">
                                <a href=""><?php echo $existing_website; ?></a>
                            </div>

                        </div>
                        <div class="col-md-5">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="billingLabel">
                                Vanity URL
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="labelInfo">
                                <a href=""><?php echo $existing_vanity; ?></a>
                            </div>

                        </div>
                        <div class="col-md-5">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="billingLabel">
                                Organization Logo
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="labelInfo">
                               <div class="imgBorder">
                                    Logo
                               </div>
                            </div>

                        </div>
                        <div class="col-md-5">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>

    </div>

    <!--After Clicking Company Edit-->

    <div class="companyEdit">
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="billingSentence2">
                    Organization info
                </div>
            </div>
            <div class="col-md-2">
                <div class="billingEdit" >

                </div>
            </div>
        </div>
        <form action="" method="post">
            <div class="row mt-4">
                <div class="col-md-10">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="billingLabel">
                                    Organization Name
                                </div>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="labelForm" name="organization" id="organizationInput" value=" <?php echo $existing_organization; ?>">

                            </div>
                            <div class="col-md-5">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">

                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-10">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="billingLabel">
                                        Domain
                                </div>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="labelForm" name="domain" id="domainInput" value=" <?php echo $existing_domain; ?>">
                            </div>
                            <div class="col-md-5">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">

                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-10">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="billingLabel">
                                    Address
                                </div>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="labelForm" name="address" id="addressInput" value="Address">

                            </div>
                            <div class="col-md-5">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">

                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-10">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="billingLabel">

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="container">

                                    <div class="row ">

                                      <div class="col-md-10" >
                                          <input type="text" name="city" id="city" class="sameLabelForm mr-2" placeholder="City">

                                          <input type="text" name="zip" id="zip" class="sameLabelForm " placeholder="Zip/Postal">
                                      </div>


                                    </div>
                               </div>

                            </div>
                            <div class="col-md-5">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">

                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-10">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="billingLabel">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <select class="labelForm" name="country" id="countryInput">
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Australia">Australia</option>
                                    <option value="India">India</option>
                                </select>

                            </div>
                            <div class="col-md-5">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">

                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-10">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="billingLabel">
                                    Website
                                </div>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="labelForm" name="website" id="webInput" value="<?php echo $existing_website; ?> ">

                            </div>
                            <div class="col-md-5">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">

                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-10">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="billingLabel">
                                    Vanity Url
                                </div>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="labelForm" name="vanity" id="vanityInput" value="<?php echo $existing_vanity; ?> ">



                            </div>
                            <div class="col-md-5">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">

                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-10">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="billingLabel">
                                    Organization Logo
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="labelInfo">
                                    <div class="imgBorder">
                                        <input type="file" name="image" id="fileToUpload">
                                    </div>

                                        <div class="row mt-2">
                                            <div class="col-md-5 ml-2">
                                                    Change
                                            </div>
                                            <div class="col-md-2 ">
                                                    Remove
                                            </div>
                                        </div>

                                    <div class="container">
                                        <div class="row mt-5">
                                            <div class="col-md-3">



                                            </div>
                                            <div class="col-md-6 btnAlign" >
                                                <div class="btn-group mr-2" role="group" aria-label="Basic example">
                                                    <!--<button type="button" class="btn btn-secondary">Left</button>
                                                    <button type="button" class="btn btn-secondary">Middle</button>-->
                                                    <button type="button" class="btn btn-responsive cancelBtn">Cancel</button>


                                                </div>
                                                <div class="btn-group" role="group" aria-label="Second group">

                                                    <input type="submit" name="orgSubmit" class="btn btn-responsive submitBtn" id="submitId" value="Submit">
                                                </div>
                                                    <!--<button type="button" class="cancelBtn">Cancel</button>
                                                    <input type="submit" name="orgSubmit" class="submitBtn" id="submitId" value="Submit">-->


                                            </div>
                                            <div class="col-md-3">

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-5">

                            </div>


                        </div>

                    </div>
                </div>
                <div class="col-md-2"></div>

            </div>


        </form>
    </div>

    <div class="payment">
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="billingSentence2">
                    Billing Address
                </div>
            </div>
            <div class="col-md-2">
                <div class="billingEdit" id="paymentClickEdit">
                         Edit
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="billingLabel">
                                    Name
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="labelInfo">
                                <?php echo $existing_fname; ?> <?php echo $existing_lname; ?>
                            </div>

                        </div>
                        <div class="col-md-5">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="billingLabel">
                                Email Address
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="labelInfo">
                                <?php echo $existing_email; ?>
                            </div>

                        </div>
                        <div class="col-md-5">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="billingLabel">
                                Contact No.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="labelInfo">
                                <?php echo $existing_contact; ?>
                            </div>

                        </div>
                        <div class="col-md-5">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="billingLabel">
                                Address
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="labelInfo">
                                <?php echo $existing_payment_address; ?>
                            </div>

                        </div>
                        <div class="col-md-5">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="billingLabel">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="labelInfo">
                                <?php echo $existing_payment_city; ?>
                            </div>

                        </div>
                        <div class="col-md-5">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="billingLabel">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="labelInfo">
                                <?php echo $existing_payment_zip; ?>
                            </div>

                        </div>
                        <div class="col-md-5">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="billingLabel">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="labelInfo">
                                <?php echo $existing_payment_country; ?>
                            </div>

                        </div>
                        <div class="col-md-5">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
               <div class="line">

               </div>
            </div>
        </div>
    </div>

    <!--After clicking Payment Edit-->
    <div class="paymentEdit">
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="billingSentence2">
                    Billing Address
                </div>
            </div>
            <div class="col-md-2">
                <div class="billingEdit">

                </div>
            </div>
        </div>
        <form action="" method="post" <!--onsubmit="showHide(); return false;"-->>
            <div class="container">
                <div class="row mt-4">


                    <input type="text" name="first_name" id="fname" class="samePaymentForm form-control" placeholder="First Name">

                    <input type="text" name="last_name" id="lname" class="samePaymentForm form-control" placeholder="Last Name">


                </div>

            </div>
            <div class="container">
                <div class="row mt-4">


                    <input type="email" name="email" id="email" class="paymentForm form-control" placeholder="Email Address">


                </div>

            </div>
            <div class="container">
                <div class="row mt-4">


                    <input type="text" name="contact" id="contact" class="paymentForm form-control" placeholder="Contact No.">


                </div>

            </div>
            <div class="container">
                <div class="row mt-4">


                    <input type="text" name="paymentAddress" id="address" class="paymentForm form-control" placeholder="Address">


                </div>

            </div>
                <div class="container">
                        <div class="row mt-4">


                            <input type="text" name="paymentCity" id="paymentCity" class="samePaymentForm form-control" placeholder="City">

                            <input type="text" name="paymentZip" id="paymentZip" class="samePaymentForm form-control" placeholder="Zip/Postal">


                        </div>
                </div>
            <div class="container">

                    <div class="row mt-4">
                        <select class="paymentForm form-control" name="paymentCountry" id="paymentCountry" value="Country">
                            <option>Bangladesh</option>
                            <option>India</option>
                            <option>Japan</option>
                        </select>

                    </div>

            </div>
            <div class="container">
                <div class="row mt-4 ">
                    <div class="col-md-2"></div>
                    <div class="col-md-7">

                    <button type="button" class="cancelBtn" name="paymentCancel" id="paymentCancel">Cancel</button>
                    <input type="submit" class="submitBtn" name="paymentSubmit" id="submitPaymentId" value="Submit">
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
            <div class="row mt-4 ">
                <div class="line">

                </div>
            </div>

        </form>
    </div>
    <div class="paymentLowerPart">
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="billingSentence2">
                    Payment Method
                </div>
            </div>
            <div class="col-md-2">
                <div class="billingEdit" id="paymentCardEdit">
                         Edit
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="billingLabel">
                                Card No.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="labelInfo">

                                   <img src="<?php echo get_template_directory_uri()."/img/paypal.png"?>">
                                        XXXX XXXX XXXX 3395
                            </div>
                            <div class="row mt-4">
                                <div class="labelInfo" id="billDate">
                                    Your next billing date is February 17, 2021.
                                </div>
                            </div>

                        </div>
                        <div class="col-md-5">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>
    </div>
    <div class="paymentMethodEdit">
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="billingSentence2">
                    Payment Method
                </div>
            </div>
            <div class="col-md-2">
                <div class="billingEdit">

                </div>
            </div>
        </div>
        <form action="" method="" id="organizationForm">
            <div class="container">
                <div class="row mt-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Debit/Credit card</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Apple Pay</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
                        <label class="form-check-label" for="inlineRadio3">Mobile Wallet</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4" >
                        <label class="form-check-label" for="inlineRadio4">Nagad/Bkash/Rocket/Nexuspay</label>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-4">


                    <input type="text" name="cardNumber" id="cardNumber" class="paymentForm form-control" placeholder="Card Number">


                </div>

            </div>
            <div class="container">
                <div class="row mt-4">


                    <input type="text" name="cardHolder" id="cardHolder" class="paymentForm form-control" placeholder="Card Holder Number">


                </div>

            </div>
            <div class="container">
                <div class="row mt-4">


                    <input type="text" name="cardMonth" id="cardMonth" class="samePaymentForm form-control" placeholder="DD/YY">

                    <input type="text" name="cardPin" id="cardPin" class="samePaymentForm form-control" placeholder="CVV">


                </div>
            </div>
            <div class="container">
                <div class="row mt-4 ">
                    <div class="col-md-2"></div>
                    <div class="col-md-7">

                        <button type="button" class="cancelBtn" name="cardCancel" id="cardCancel">Cancel</button>
                        <input type="submit" class="submitBtn" name="cardSubmit" id="cardPaymentSubmit" value="Submit">
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>


        </form>
    </div>



       <div class="invoice mt-4">
           <table>
               <tr>
                   <th>Invoice Number</th>
                   <th>Billing Time</th>
                   <th>Due on</th>
                   <th>Amount</th>
                   <th>Status</th>
                   <th>Action</th>
               </tr>
               <tr>
                   <td style="font-weight: bold;"><u>123456789</u></td>
                   <td>15/12/2020 to 14/01/2021</td>
                   <td>15/01/2021</td>
                   <td>$99</td>
                   <td style="color:#0889DF;">Pay Now</td>
                   <td>Download</td>
               </tr>
               <tr>
                   <td style="font-weight: bold;"><u>123456789</u></td>
                   <td>15/12/2020 to 14/01/2021</td>
                   <td>15/01/2021</td>
                   <td>$99</td>
                   <td style="color:#069000;">Paid</td>
                   <td>Download</td>
               </tr>


           </table>
       </div>



   </div>
<?php }else {?>
    <div class="container">Please Log In to see the billing Info </div>
<?php } ?>


   <script>

       function showHide() {
           $(".company").hide();
           $(".companyEdit").hide();
           $(".payment").show();
           $(".invoice").hide();
           $(".paymentLowerPart").show();
           $(".paymentEdit").hide();
       }

       $(document).ready(function(){


    $("#paymentButton").click(function(){
        $(".company").hide();
        $(".companyEdit").hide();
        $(".payment").show();
        $(".invoice").hide();
        $(".paymentLowerPart").show();
        $("#paymentButton").css("background","#4B5A7E");
        $("#companyButton").css("background","#FFFFFF");
        $("#invoicesButton").css("background","#FFFFFF");
    });
    $("#organizationEdit").click(function(){
        $(".company").hide();
        $(".companyEdit").show();
        $(".payment").hide();
        $(".invoice").hide();
    });
    $("#companyButton").click(function(){
        $(".company").show();
        $(".payment").hide();
        $(".companyEdit").hide();
        $(".invoice").hide();
        $(".paymentLowerPart").hide();
        $(".paymentEdit").hide();
        $(".paymentMethodEdit").hide();
        $("#companyButton").css("background","#4B5A7E");
        $("#paymentButton").css("background","#FFFFFF");
        $("#invoicesButton").css("background","#FFFFFF");

    });
    $(".cancelBtn").click(function(){
        $(".company").show();
        $(".payment").hide();
        $(".companyEdit").hide();
        $(".invoice").hide();
    });
    $("#invoicesButton").click(function(){
        $(".company").hide();
        $(".companyEdit").hide();
        $(".payment").hide();
        $(".invoice").show();
        $(".paymentEdit").hide();
        $(".paymentMethodEdit").hide();
        $(".paymentLowerPart").hide();
        $("#invoicesButton").css("background","#4B5A7E");
        $("#companyButton").css("background","#FFFFFF");
        $("#paymentButton").css("background","#FFFFFF");
    });
    $("#paymentClickEdit").click(function(){


        $(".payment").hide();
        $(".paymentEdit").show();



    });
    $("#paymentCardEdit").click(function(){


        $(".paymentLowerPart").hide();
        $(".paymentMethodEdit").show();
    });
    $("#cardCancel").click(function(){

        $(".company").hide();
        $(".payment").show();
        $(".paymentLowerPart").show();
        $(".paymentMethodEdit").hide();
    });
    $("#paymentCancel").click(function(){

        $(".company").hide();
        $(".payment").show();
        $(".paymentEdit").hide();
    });

});






</script>



<?php get_footer();?>



