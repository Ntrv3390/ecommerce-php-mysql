 function set_coupon(){
				var promo_code=jQuery('#promo_code').val();
				if(promo_code!=''){
                    
					jQuery('#promo_error').html('');
					jQuery.ajax({
						url:'set_coupon.php',
						type:'post',
						data:'promo_code='+promo_code,
						success:function(result){
							var data=jQuery.parseJSON(result);
							if(data.is_error=='yes'){
                               jQuery('#coupon_box').hide();
							   jQuery('#coupon_result').html(data.dd);
							   jQuery('#coupon_price').html('');
							   jQuery('#order_total_price').html(data.result);
							}
							if(data.is_error=='no'){
                               jQuery('#coupon_box').show();
							   jQuery('#coupon_result').html('Coupon Code Applied Successfully');
							   jQuery('#coupon_price').html(data.dd);
							   jQuery('#order_total_price').html(data.result);
							}
							
						}
					});
				}
			}