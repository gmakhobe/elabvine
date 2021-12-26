<div class="form-area contact-form pt-30">
    <div class="title text-center mb-20">
        <h3>Submit Report/Complain</h3>
    </div>
    <label>Select report subject:</label>
    <select class="form-control" id="problem">
        <option value="Harassment">Harassment</option>
        <option value="Unprofessional">Unprofessional</option>
        <option value="Absence">Absence</option>
    </select>
    <label>Explain:</label>
    <textarea class="common-textarea form-control" id="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>
    <br>
    <button id='button-report-lesson' class="genric-btn primary" style="float: left;">Submit Complaint</button>					
</div>