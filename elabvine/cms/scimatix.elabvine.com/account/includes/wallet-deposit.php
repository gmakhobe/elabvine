<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#eft">EFT (PayFast)</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#deposit">Bank Transfer (Deposit)</a>
    </li>
</ul>
<div class="tab-content">
    <div class="tab-pane container active" id="eft">

        <div class="form-area contact-form">
            <label>Enter amount:</label>
            <p>Enter amount in Rands, Min Amount is R25</p>
            <input id="amount" placeholder="Enter amount" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter amount'" class="common-input mb-20 form-control" required="" type="number">

            <div class="alert-msg" style="text-align: left;"></div>
            <button id='button-amount-submit' class="genric-btn info-border circle arrow" style="float: left;">Continue <span class="lnr lnr-arrow-right"></span></button>					
        </div>

    </div>
    <div class="tab-pane container fade" id="deposit">

        <p>Bank account details</p>
        <dl class="param">
            <dt>BANK: </dt>
            <dd>FIRST NATIONAL BANK (FNB) </dd>
        </dl>
        <dl class="param">
            <dt>Account number: </dt>
            <dd>62796481481 </dd>
        </dl>
        <dl class="param">
            <dt>Account type: </dt>
            <dd>Cheque Account </dd>
        </dl>
        <dl class="param">
            <dt>BRANCH CODE: </dt>
            <dd> 252145 </dd>
        </dl>
        <p><strong>Note:</strong> After making a bank deposit/transfer please send your proof of payment to account@scimatix.co.za including your name, surname and registered email address. </p>

    </div>
</div>

