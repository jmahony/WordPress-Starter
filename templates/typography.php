<?php
/**
 * @package WordPress
 * @subpackage Rep_Template
 *
 * Template Name: Typography Check
 *
 */

?><?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="span16">
      <h1>Heading 1</h1>
      <h2>Heading 2</h2>
      <h3>Heading 3</h3>
      <h4>Heading 4</h4>
      <h5>Heading 5</h5>
      <h6>Heading 6</h6>

      <h1><a href="#alink">Heading 1 wrapped in a</a></h1>
      <h2><a href="#alink">Heading 2 wrapped in a</a></h2>
      <h3><a href="#alink">Heading 3 wrapped in a</a></h3>
      <h4><a href="#alink">Heading 4 wrapped in a</a></h4>
      <h5><a href="#alink">Heading 5 wrapped in a</a></h5>
      <h6><a href="#alink">Heading 6 wrapped in a</a></h6>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non laboro, inquit, de nomine. Quare conare, quaeso. Quantam rem agas, ut Circeis qui habitet totum hunc mundum suum municipium esse existimet? Graecum enim hunc versum nostis omnes-: Suavis laborum est praeteritorum memoria. Qui ita affectus, beatum esse numquam probabis; Vos autem cum perspicuis dubia debeatis illustrare, dubiis perspicua conamini tollere. Duo Reges: constructio interrete. Et quod est munus, quod opus sapientiae? Quodsi ipsam honestatem undique pertectam atque absolutam. Qua igitur re ab deo vincitur, si aeternitate non vincitur? </p>

      <p>Sin dicit obscurari quaedam nec apparere, quia valde parva sint, nos quoque concedimus; Nam aliquando posse recte fieri dicunt nulla expectata nec quaesita voluptate. Quicquid porro animo cernimus, id omne oritur a sensibus; An quod ita callida est, ut optime possit architectari voluptates? </p>

      <p>Cur igitur, cum de re conveniat, non malumus usitate loqui? Quid ergo attinet gloriose loqui, nisi constanter loquare? Hoc loco discipulos quaerere videtur, ut, qui asoti esse velint, philosophi ante fiant. Huius, Lyco, oratione locuples, rebus ipsis ielunior. Ita relinquet duas, de quibus etiam atque etiam consideret. </p>

      <p>Istic sum, inquit. Tecum optime, deinde etiam cum mediocri amico. Aliena dixit in physicis nec ea ipsa, quae tibi probarentur; Quid est, quod ab ea <a href="#link">This is a link nested in a paragraph</a> absolvi et perfici debeat? Hoc sic expositum dissimile est superiori. Eorum enim omnium multa praetermittentium, dum eligant aliquid, quod sequantur, quasi curta sententia; An ea, quae per vinitorem antea consequebatur, per se ipsa curabit? </p>

      <ul>
        <li>Lorem ipsum dolor sit amet,</li>
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non laboro, inquit, de nomine. Quare conare, quaeso. Quantam rem agas, ut Circeis qui habitet totum hunc mundum suum municipium esse exist</li>
      </ul>

      <ol>
        <li>Lorem ipsum dolor sit amet,</li>
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non laboro, inquit, de nomine. Quare conare, quaeso. Quantam rem agas, ut Circeis qui habitet totum hunc mundum suum municipium esse exist</li>
      </ol>

      <a href="#link">This a normal link</a>
    </div>
  </div>
</div>

<?php get_footer(); ?>