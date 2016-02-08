<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<title>MAKADARA LAW COURT</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/datepicker/css/bootstrap-datepicker.min.css"); ?>">
</head>

<body>
<div class="container">
<h1>MAKADARA LAW COURTS DCRT</H1>
  <?php echo form_open('Register', 'role="form" id="Regform" class="form" data-toggle="validator"'); ?>
  <div class="form-group">
  <label for="tdate">Today's date:</label>
  <?php $data = array('name'=> 'tdate','id'=> 'tdate','class'=> 'form-control','maxlength'=> '100','size'=> '50','style'=> 'width:50%','placeholder'=> 'Enter todays date');
  echo form_input($data); ?>
</div>
<div class="form-group">
<div class="input-group date">
  <input type="text" class="form-control" id="sandbox-container"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
</div>
</div>
<div class="form-group">
  <label for="crdate">Case Registered date:</label>
  <?php $data = array('name'=> 'crdate','id'=> 'crdate','class'=> 'form-control','maxlength'=> '100','size'=> '50','style'=> 'width:50%');
  echo form_input($data); ?>
</div>
<fieldset>
<legend>CASE NO:</legend>
  <div class="form-group">
    <label for="code">CODE:</label>
    <?php $data = array('name'=> 'code','id'=> 'code','class'=> 'form-control','maxlength'=> '100','size'=> '50','style'=> 'width:25%','placeholder'=> 'Enter case code');
  echo form_input($data); ?>
  </div>
  <div class="form-group">
    <label for="number">NO:</label>
    <?php $data = array('name'=> 'cnumber','id'=> 'cnumber','class'=> 'form-control','maxlength'=> '100','size'=> '50','style'=> 'width:25%');
  echo form_input($data); ?>
  <div class="help-block with-errors"></div>
  </div>
  <div class="form-group">
  <label for="cyear">YEAR</label>
  <?php $data = array('name'=> 'cyear','id'=> 'cyear','class'=> 'form-control','maxlength'=> '100','size'=> '50','style'=> 'width:25%');
  echo form_input($data); ?>
</div>
</fieldset>
 <div class="form-group">
  <label for="ctype">CASE TYPE:</label>
  <select class="form-control" id="ctype" name="ctype" placeholder="Select Case Type">
    <option>Abortion, infanticide, concealing birth, killing unborn child</option>
<option>Adoption</option>
<option>Alarming publications</option>
<option>Arson, setting fire to crops and offences allied to arson</option>
<option>Attempted murder, suicide and related offenses</option>
<option>Attempted robbery</option>
<option>Bankruptcy and Winding Up Causes</option>
<option>Burglary, housebreaking, entering dwelling-house with intent to commit felony and similar offences</option>
<option>Child in conflict with the law</option>
<option>Child stealing</option>
<option>Children in need of care and protection, including orphaned and vulnerable children, children subjected to harmful cultural practices (FGM and early marriages), torture, prostitution, trafficking, and other offenses under the Children's Act</option>
<option>Civil Appeal</option>
<option>Collective Bargaining Agreements (CBAs)</option>
<option>Commercial</option>
<option>Constitutional and Human Rights Petitions (including Constitutional References)</option>
<option>Corruption and integrity</option>
<option>Counterfeiting trademarks</option>
<option>Creating disturbance, drunk and disorderly, affray, unlawful assembly, riots, and other offenses against public tranquillity</option>
<option>Criminal negligence, recklessness, nuisances</option>
<option>Criminal Revision</option>
<option>Criminal Trespass, forcible detainer</option>
<option>Divorce</option>
<option>Environment and Land Cases (ELC)</option>
<option>ELC Appeals</option>
<option>ELC Miscellaneous Cases</option>
<option>Election petitions</option>
<option>Fraud, forgery (including coining), obtaining by false pretenses, treachery, personation, frauds by trustees and persons in a position of trust and false accounting</option>
<option>Grievous harm, assault causing actual bodily harm, common assault</option>
<option>Income Tax Appeals</option>
<option>Industrial Causes</option>
<option>Industrial Judicial Review</option>
<option>Industrial Miscellaneous</option>
<option>Industrial Petitions</option>
<option>Inquest</option>
<option>Judicial Review</option>
<option>Kadhi divorce</option>
<option>Kadhi- other matters (capture in details of case)</option>
<option>Kadhi succession</option>
<option>Kidnapping, abduction, detention of female for immoral purposes</option>
<option>Libel, defamation, slander</option>
<option>Malicious damage, injury to property, goods etc.</option>
<option>Manslaughter</option>
<option>Matrimonial property dispute</option>
<option>Miscellaneous Civil Applications</option>
<option>Miscellaneous Commercial Applications</option>
<option>Miscellaneous Criminal Applications</option>
<option>Murder</option>
<option>Obstruction of justice: perjury, conspiracy to defeat justice, escapes from custody, resisting arrest and miscellaneous offenses against the administration of justice and public authority</option>
<option>Offences allied to morality including prostitution, bigamy, marriage with fraudulent intent</option>
<option>Offences relating to alcoholic drinks control and licensing</option>
<option>Offenses under Public Health Act</option>
<option>Personal injury (Running down)</option>
<option>Personal injury (Workmen's Compensation)</option>
<option>Possession of firearms, explosives and related</option>
<option>Possession of narcotic drugs and psychotropic substances (cannabis sativa, cocaine, heroin etc.)</option>
<option>Preparations/conspiracy to commit felony, neglect to prevent a felony, unlawful oaths, threats to kill</option>
<option>Robbery</option>
<option>Robbery with violence</option>
<option>Sexual offenses (defilement, attempted defilement, rape, gang rape, incest, indecent acts with a child or adult, sexual harassment and others)</option>
<option>Stock theft, and injuring, killing or maiming of a domestic animal with intent to steal</option>
<option>Succession (Probate & Administration - P&A)</option>
<option>Terrorism, piracy and related offenses</option>
<option>Theft, stealing by servant, handling stolen or suspected stolen property/goods, possession of government/public stores, and related offenses</option>
<option>Traffic</option>
<option>Wildlife and forestry offenses</option>
<option>"Other civil-
(specify in details of case)"</option>
<option>Other criminal- (specify in details of case)</option>

  </select>
</div>
<div class="form-group">
  <label for="Jofficer">JUDICIAL OFFICER:</label>
  <select class="form-control" id="Jofficer" name="jofficer">
    <option>Not yet assigned</option>
    <option>Macharia, Alice Wambui</option>
    <option>Kosgei, Linda Chebichii</option>
    <option>Nyongesa, Emily Nafula</option>
    <option>Nyutu, Eunice Kagure</option>
    <option>Ndururu, Victor</option>
    <option>Nyaga, Heston N.</option>
    <option>Ominde, Emily</option>
    <option>Oketch, William Otieno</option>
  </select>
</div>
<div class="form-group">
  <label for="ccfor">CASE COMING FOR:</label>
  <select class="form-control" id="ccfor" name="ccfor">
    <option>Registration</option>
    <option>Plea</option>
    <option>Advisory opinion</option>
    <option>Certificates of urgency</option>
    <option>Contempt proceedings</option>
    <option>Deputy Registrar actions (i.e. signing of decrees, certificates of taxation and entering of interlocutory judgements)</option>
    <option>Hearing</option>
    <option>Mention</option>
    <option>Ruling</option>
    <option>Judgment</option>
    <option>Sentencing</option>
    <option>Execution proceedings</option>
    <option>Post-judgment</option>
    <option>Taxation</option>
    <option>Other (specify in details of case)</option>

  </select>
</div>
<div class="form-group">
  <label for="outcome">OUTCOME:</label>
  <select class="form-control" id="outcome" name="outcome">
    <option>Adjournment</option>
    <option>Case Registered</option>
    <option>Consent filed in the registry</option>
    <option>Consent recorded- case closed</option>
    <option>Consolidated</option>
    <option>Consolidated- case closed</option>
    <option>Submissions made or filed</option>
    <option>Directions given</option>
    <option>File transferred</option>
    <option>Grant confirmed</option>
    <option>Grant issued</option>
    <option>Limited grant issued</option>
    <option>Grant revoked</option>
    <option>Hearing date set (in court)</option>
    <option>Mention date set (in court)</option>
    <option>Matter withdrawn</option>
    <option>Matter withdrawn under section 87(a) of CPC</option>
    <option>Out of court settlement reached</option>
    <option>Ruling date given</option>
    <option>Judgment date given</option>
    <option>Ruling delivered</option>
    <option>Ruling delivered- case closed</option>
    <option>Judgment delivered</option>
    <option>Sentenced</option>
    <option>"Terminated/ struck out/ dismissed/case closed
    (specify in details of case)"</option>
    <option>Other orders</option>
    <option>Other (specify in details of case)</option>
  </select>
</div>
 <div class="form-group">
  <label for="adjreason">ADJORNMENT REASON:</label>
  <select class="form-control" id="adjreason" name="adjreason">
    <option>Advocate of defendant/accused not present</option>
    <option>Advocate of plaintiff/appellant not present</option>
    <option>Defendant/Accused not present</option>
    <option>Plaintiff/Appellant not present</option>
    <option>No parties present</option>
    <option>Court not sitting</option>
    <option>Court on its own motion</option>
    <option>Death of a party</option>
    <option>Defendant/accused not ready</option>
    <option>"Prosecutor/Plaintiff/appellant/
    petitioner not ready"</option>
    <option>Joint parties not ready</option>
    <option>Expert report not ready (probation, children, expert witness, document examiner, etc.)</option>
    <option>Judicial officer on transfer</option>
    <option>No proof of service</option>
    <option>No reason recorded</option>
    <option>Typed proceedings not ready</option>
    <option>Witness not bonded</option>
    <option>Other registry issues (describe in details of case)</option>
    <option>Other (specify in details of case)</option>
  </select>
</div>
<div class="form-group">
  <label for="nadate">NEXT ACTIVITY DATE:</label>
  <input type="text" class="form-control" id="nadate" name="nadate">
</div>
<div class="form-group">
  <label for="oidetail">OTHER IMPORTANT DETAILS:</label>
  <textarea class="form-control" rows="5" id="oidetail" name="oidetail"></textarea>
</div>
<fieldset>
<legend>NUMBER OF PLAINTIFFS/APPELLANTS</legend>
<div class="form-group">
    <label for="m">M:</label>
    <input type="text" class="form-control" id="plaintiffm" name="plaintiffm"placeholder="">
  </div>
  <div class="form-group">
    <label for="f">F:</label>
    <input type="text" class="form-control" id="plaintifff" name="plaintifff"placeholder="">
  </div>
  <div class="form-group">
    <label for="org">ORG:</label>
    <input type="text" class="form-control" id="plaintifforg" name="plaintifforg"placeholder="">
  </div>
 <legend>NUMBER OF DEPENDANTS ACCUSED</legend>
<div class="form-group">
    <label for="m">M:</label>
    <input type="text" class="form-control" id="accusedm" name="accusedm" placeholder="">
  </div>
  <div class="form-group">
    <label for="f">F:</label>
    <input type="text" class="form-control" id="accusedf" name="accusedf" placeholder="">
  </div>
  <div class="form-group">
    <label for="org">ORG:</label>
    <input type="text" class="form-control" id="accusedorg" name="accusedorg" placeholder="">
  </div>
  </fieldset>
  <div class="form-group">
  <label for="lla">LITIGANT LEGAL ACTION:</label>
  <select class="form-control" id="lla" name="lla">
    <option>Y</option>
    <option>N</option>
  </select>
</div>
<div class="form-group">
    <label for="wtoday">NUMBER OF WITNESS TESTFIED TODAY:</label>
    <input type="text" class="form-control" id="wtoday" name="wtoday" placeholder="">
  </div>
  <div class="form-group">
    <label for="cco">CRIMINAL CASES ONLY:</label>
    <input type="text" class="form-control" id="cco" name="cco" placeholder="">
  </div>
  <div class="form-group">
    <label for="fa">FINE AMOUNT:</label>
    <input type="text" class="form-control" id="fa" name="fa" placeholder="">
  </div>
  <div class="form-group">
    <label for="ca">CASH AMOUNT:</label>
    <input type="text" class="form-control" id="ca" name="ca" placeholder="">
  </div>
  <div class="form-group">
    <label for="ba">BOND AMOUNT:</label>
    <input type="text" class="form-control" id="ba" name="ba" placeholder="">
  </div>
  <?php echo form_submit('mysubmit', 'Submit Post!'); ?>
<?php echo form_close(); ?>
</div>

<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="<?php echo base_url("assets/datatables/js/jquery.js"); ?>"></script>
  
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js"); ?>"></script>
<script type="text/javascript" charset="utf8" src="<?php echo base_url("assets/datepicker/js/bootstrap-datepicker.min.js"); ?>"></script>
<script>
$('#sandbox-container .input-group.date').datepicker({
});
</script>
</body>
</html>