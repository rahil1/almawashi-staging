<li class=""><a class="flaticon-open-tender"    href="/open_tenders"><span>Open Tenders</span></a></li>
<li class=""><a class="flaticon-request-qoute"  href="/request_quote"><span>Request Quote</span></a></li>
<li class=""><a class="flaticon-carrer-hub"     href="/careers_hub"><span>Careers Hub</span></a></li>

@if(auth()->check())
	<li class=""><a class="flaticon-login" href="{{ route('supplier_dashboard') }}">Supplier Dashboard</a></li>
@endif