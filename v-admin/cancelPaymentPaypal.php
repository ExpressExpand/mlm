<?php
	$pageTitle = "Undo Payment";
	//get header
	include('v-templates/header.php');
	//include sidebar
	include('v-templates/sidebar.php');
?>

<!--container for content of the website-->
	<div class="span9" id="content_container">
    	<blockquote>
            <p>Undo Payment By Paypal</p>
            <small>
                <cite title="Source Title">Undo payments of your page.</cite>
            </small>
        </blockquote>
        
        <table class="table table-hover">
        	<thead>
                <tr>
                    <th>Order Id</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Total Amount</th>
                </tr>
            </thead>
            
			<?php
				//setting payment request value
				$value = "Undo";
				//call the method from BLL to get members list
				$manageData->getDuePaymentsPaypal($value);
            ?>           
        </table>
        
     </div>
</div>
<!--body main container ends here--> 

<?php
	//get footer
	include('v-templates/footer.php');
?>