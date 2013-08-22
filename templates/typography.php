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
      <table class="table">
        <thead>
          <tr>
            <td colspan="2">
              Headings
            </td>
          </tr>
          <tr>
            <th>Tag</th>
            <th>Content</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td width="100px">h1</td>
            <td><h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1></td>
          </tr>
          <tr>
            <td>h2</td>
            <td><h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2></td>
          </tr>
          <tr>
            <td>h3</td>
            <td><h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3></td>
          </tr>
          <tr>
            <td>h4</td>
            <td><h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4></td>
          </tr>
          <tr>
            <td>h5</td>
            <td><h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5></td>
          </tr>
          <tr>
            <td>h6</td>
            <td><h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h6></td>
          </tr>
          <tr>
            <td>h1 a</td>
            <td><h1><a href="#www">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h1></td>
          </tr>
          <tr>
            <td>h2 a</td>
            <td><h2><a href="#www">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h2></td>
          </tr>
          <tr>
            <td>h3 a</td>
            <td><h3><a href="#www">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h3></td>
          </tr>
          <tr>
            <td>h4 a</td>
            <td><h4><a href="#www">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4></td>
          </tr>
          <tr>
            <td>h5 a</td>
            <td><h5><a href="#www">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5></td>
          </tr>
          <tr>
            <td>h6 a</td>
            <td><h6><a href="#www">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h6></td>
          </tr>
        </tbody>
      </table>
      <table class="table">
        <thead>
          <tr>
            <td colspan="2">
              General
            </td>
          </tr>
          <tr>
            <th>Tag</th>
            <th>Content</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td width="100px">p</td>
            <td>
              <p>Sin dicit obscurari quaedam nec apparere, quia valde parva sint, nos quoque concedimus; Nam aliquando posse recte fieri dicunt nulla expectata nec quaesita voluptate. Quicquid porro animo cernimus, id omne oritur a sensibus; An quod ita callida est, ut optime possit architectari voluptates? </p>
            </td>
          </tr>
          <tr>
            <td>p+p</td>
            <td>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non laboro, inquit, de nomine. Quare conare, quaeso. Quantam rem agas, ut Circeis qui habitet totum hunc mundum suum municipium esse existimet? Graecum enim hunc versum nostis omnes-: Suavis laborum est praeteritorum memoria. Qui ita affectus, beatum esse numquam probabis; Vos autem cum perspicuis dubia debeatis illustrare, dubiis perspicua conamini tollere. Duo Reges: constructio interrete. Et quod est munus, quod opus sapientiae? Quodsi ipsam honestatem undique pertectam atque absolutam. Qua igitur re ab deo vincitur, si aeternitate non vincitur? </p>
              <p>Sin dicit obscurari quaedam nec apparere, quia valde parva sint, nos quoque concedimus; Nam aliquando posse recte fieri dicunt nulla expectata nec quaesita voluptate. Quicquid porro animo cernimus, id omne oritur a sensibus; An quod ita callida est, ut optime possit architectari voluptates? </p>
            </td>
          </tr>
          <tr>
            <td>p a</td>
            <td>
              <p>Sin dicit obscurari quaedam nec apparere, quia <a href="#link">This a link</a> valde parva sint, nos quoque concedimus; Nam aliquando posse <a href="#link">This a link</a> recte fieri dicunt nulla expectata nec quaesita voluptate. Quicquid porro animo cernimus, id omne oritur a sensibus; An quod ita <a href="#link">This a link</a> callida est, ut optime possit architectari voluptates? </p>
            </td>
          </tr>
          <tr>
            <td>ul</td>
            <td>
              <ul>
                <li>Lorem ipsum dolor sit amet,</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non laboro, inquit, de nomine. Quare conare, quaeso. Quantam rem agas, ut Circeis qui habitet totum hunc mundum suum municipium esse exist</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td>ol</td>
            <td>
              <ol>
                <li>Lorem ipsum dolor sit amet,</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non laboro, inquit, de nomine. Quare conare, quaeso. Quantam rem agas, ut Circeis qui habitet totum hunc mundum suum municipium esse exist</li>
              </ol>
            </td>
          </tr>
          <tr>
            <td>table</td>
            <td>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr>
            <td>blockquote</td>
            <td>
              <blockquote>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non laboro, inquit, de nomine. Quare conare, quaeso. Quantam rem agas, ut Circeis qui habitet totum hunc mundum suum municipium esse exist
              </blockquote>
            </td>
          </tr>
        </tbody>
      </table>

      <table class="table">
        <thead>
          <tr>
            <td colspan="2">Forms</td>
          </tr>
          <tr>
            <th>Tag</th>
            <th>Content</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>input[type="text"]</td>
            <td>
              <form>
                <input type="text" placeholder="A text field...">
              </form>
            </td>
          </tr>
          <tr>
            <td>input[type="password"]</td>
            <td>
              <form>
                <input type="password" placeholder="A password field...">
              </form>
            </td>
          </tr>
          <tr>
            <td>input[type="email"]</td>
            <td>
              <form>
                <input type="email" placeholder="A email field...">
              </form>
            </td>
          </tr>
          <tr>
            <td>input[type="search"]</td>
            <td>
              <form>
                <input type="search" placeholder="A search field...">
              </form>
            </td>
          </tr>
          <tr>
            <td>input[type="select"]</td>
            <td>
              <form>
                <select>
                  <option>Lorem Ipsum</option>
                  <option>Lorem Ipsum</option>
                  <option>Lorem Ipsum Lorem Ipsum</option>
                  <option>Lorem Ipsum</option>
                  <option>Lorem Ipsum Lorem Ipsum Lorem Ipsum</option>
                </select>
              </form>
            </td>
          </tr>
          <tr>
            <td>input[type="select"] multiple</td>
            <td>
              <form>
                <select multiple="multiple">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </form>
            </td>
          </tr>
          <tr>
            <td>input[type="radio"]</td>
            <td>
              <form>
                <label class="radio">
                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                  Option one is this and that—be sure to include why it's great
                </label>
                <label class="radio">
                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                  Option two can be something else and selecting it will deselect option one
                </label>
              </form>
            </td>
          </tr>
          <tr>
            <td>input[type="checkbox"]</td>
            <td>
              <form>
                <label class="checkbox">
                  <input type="checkbox" value="">
                  Option one is this and that—be sure to include why it's great
                </label>
              </form>
            </td>
          </tr>
          <tr>
            <td>input[type="submit"]</td>
            <td>
              <form>
                <input type="submit" value="Submit" class="btn btn-primary" />
              </form>
            </td>
          </tr>
        </tbody>
      </table>


    </div>
  </div>
</div>

<?php get_footer(); ?><form>