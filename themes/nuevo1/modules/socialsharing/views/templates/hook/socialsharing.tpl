{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if $PS_SC_TWITTER || $PS_SC_FACEBOOK || $PS_SC_GOOGLE || $PS_SC_PINTEREST}
	<p class="socialsharing_product list-inline no-print">
		<span>{l s='Share: '}</span>
		{if $PS_SC_TWITTER}
			<button  data-type="twitter" type="button" class="btn btn-outline btn-twitter social-sharing">
				<i class="fa fa-twitter"></i>				
			</button>
		{/if}
		{if $PS_SC_FACEBOOK}
			<button  data-type="facebook" type="button" class="btn btn-outline btn-facebook  social-sharing">
				<i class="fa fa-facebook"></i>				
			</button>
		{/if}
		{if $PS_SC_GOOGLE}
			<button data-type="google-plus" type="button" class="btn btn-outline btn-google-plus  social-sharing">
				<i class="fa fa-google-plus"></i>				
			</button>
		{/if}
		{if $PS_SC_PINTEREST}
			<button data-type="pinterest" type="button" class="btn btn-outline btn-pinterest  social-sharing">
				<i class="fa fa-pinterest"></i>				
			</button>
		{/if}
	</p>
{/if}