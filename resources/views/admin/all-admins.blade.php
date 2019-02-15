@extends('admin.layout.design')
@section('content')
  <div class="row">
      <div class="col-lg-12">
          <div class="card border-primary filterable">
              <div class="card-header text-white bg-primary clearfix  ">
                  <div class="card-title d-inline pull-left">
                      <i class="fa fa-fw fa-align-justify"></i> <b>Want to export data?</b>
                  </div>
                  <div class="tools pull-right"></div>
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-striped" id="table1">
                          <thead>
                          <tr>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>User email</th>
                              <th>
                                  Account Type
                              </th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td>Demetrius</td>
                              <td>Cole</td>
                              <td>Demetrius.Cole@yahoo.com</td>
                              <td>Credit Card Account</td>
                          </tr>
                          <tr>
                              <td>Sydnee</td>
                              <td>Beahan</td>
                              <td>Sydnee_Beahan41@gmail.com</td>
                              <td>Home Loan Account</td>
                          </tr>
                          <tr>
                              <td>Susanna</td>
                              <td>Skiles</td>
                              <td>Susanna.Skiles@gmail.com</td>
                              <td>Investment Account</td>
                          </tr>
                          <tr>
                              <td>Dean</td>
                              <td>Okuneva</td>
                              <td>Dean.Okuneva@hotmail.com</td>
                              <td>Savings Account</td>
                          </tr>
                          <tr>
                              <td>Jameson</td>
                              <td>Hane</td>
                              <td>Jameson.Hane75@yahoo.com</td>
                              <td>Investment Account</td>
                          </tr>
                          <tr>
                              <td>Jamar</td>
                              <td>Mohr</td>
                              <td>Jamar80@hotmail.com</td>
                              <td>Savings Account</td>
                          </tr>
                          <tr>
                              <td>Jazlyn</td>
                              <td>Bergnaum</td>
                              <td>Jazlyn_Bergnaum11@yahoo.com</td>
                              <td>Personal Loan Account</td>
                          </tr>
                          <tr>
                              <td>Eldridge</td>
                              <td>Maggio</td>
                              <td>Eldridge_Maggio@yahoo.com</td>
                              <td>Home Loan Account</td>
                          </tr>
                          <tr>
                              <td>Rubie</td>
                              <td>Kuhic</td>
                              <td>Rubie54@hotmail.com</td>
                              <td>Auto Loan Account</td>
                          </tr>
                          <tr>
                              <td>Karli</td>
                              <td>Grady</td>
                              <td>Karli20@gmail.com</td>
                              <td>Auto Loan Account</td>
                          </tr>
                          <tr>
                              <td>Claude</td>
                              <td>Hilll</td>
                              <td>Claude.Hilll@yahoo.com</td>
                              <td>Investment Account</td>
                          </tr>
                          <tr>
                              <td>Dameon</td>
                              <td>Streich</td>
                              <td>Dameon_Streich@gmail.com</td>
                              <td>Money Market Account</td>
                          </tr>
                          <tr>
                              <td>Jalen</td>
                              <td>Schimmel</td>
                              <td>Jalen3@hotmail.com</td>
                              <td>Personal Loan Account</td>
                          </tr>
                          <tr>
                              <td>Fatima</td>
                              <td>Heidenreich</td>
                              <td>Fatima3@yahoo.com</td>
                              <td>Credit Card Account</td>
                          </tr>
                          <tr>
                              <td>Jaydon</td>
                              <td>Volkman</td>
                              <td>Jaydon_Volkman26@hotmail.com</td>
                              <td>Investment Account</td>
                          </tr>
                          <tr>
                              <td>Santos</td>
                              <td>Tremblay</td>
                              <td>Santos.Tremblay@gmail.com</td>
                              <td>Personal Loan Account</td>
                          </tr>
                          <tr>
                              <td>Emie</td>
                              <td>Ondricka</td>
                              <td>Emie_Ondricka@yahoo.com</td>
                              <td>Investment Account</td>
                          </tr>
                          <tr>
                              <td>Saige</td>
                              <td>Bergnaum</td>
                              <td>Saige39@yahoo.com</td>
                              <td>Credit Card Account</td>
                          </tr>
                          <tr>
                              <td>Brock</td>
                              <td>Crona</td>
                              <td>Brock26@yahoo.com</td>
                              <td>Personal Loan Account</td>
                          </tr>
                          <tr>
                              <td>Liana</td>
                              <td>Harvey</td>
                              <td>Liana.Harvey32@hotmail.com</td>
                              <td>Savings Account</td>
                          </tr>
                          <tr>
                              <td>Haylie</td>
                              <td>Stiedemann</td>
                              <td>Haylie.Stiedemann@yahoo.com</td>
                              <td>Savings Account</td>
                          </tr>
                          <tr>
                              <td>Hanna</td>
                              <td>Wuckert</td>
                              <td>Hanna44@gmail.com</td>
                              <td>Home Loan Account</td>
                          </tr>
                          <tr>
                              <td>Aron</td>
                              <td>Hintz</td>
                              <td>Aron.Hintz@hotmail.com</td>
                              <td>Investment Account</td>
                          </tr>
                          <tr>
                              <td>Eunice</td>
                              <td>Ankunding</td>
                              <td>Eunice.Ankunding72@yahoo.com</td>
                              <td>Savings Account</td>
                          </tr>
                          <tr>
                              <td>Mona</td>
                              <td>VonRueden</td>
                              <td>Mona.VonRueden@yahoo.com</td>
                              <td>Credit Card Account</td>
                          </tr>
                          <tr>
                              <td>Celestino</td>
                              <td>Grant</td>
                              <td>Celestino.Grant@yahoo.com</td>
                              <td>Credit Card Account</td>
                          </tr>
                          <tr>
                              <td>Zelda</td>
                              <td>Wuckert</td>
                              <td>Zelda_Wuckert@yahoo.com</td>
                              <td>Auto Loan Account</td>
                          </tr>
                          <tr>
                              <td>Elmo</td>
                              <td>Schaden</td>
                              <td>Elmo43@gmail.com</td>
                              <td>Home Loan Account</td>
                          </tr>
                          <tr>
                              <td>Andres</td>
                              <td>Hintz</td>
                              <td>Andres.Hintz1@yahoo.com</td>
                              <td>Auto Loan Account</td>
                          </tr>
                          <tr>
                              <td>Mandy</td>
                              <td>Senger</td>
                              <td>Mandy4@yahoo.com</td>
                              <td>Personal Loan Account</td>
                          </tr>
                          <tr>
                              <td>Hayley</td>
                              <td>Veum</td>
                              <td>Hayley.Veum@hotmail.com</td>
                              <td>Investment Account</td>
                          </tr>
                          <tr>
                              <td>Wilmer</td>
                              <td>Hoppe</td>
                              <td>Wilmer_Hoppe@gmail.com</td>
                              <td>Home Loan Account</td>
                          </tr>
                          <tr>
                              <td>Lyric</td>
                              <td>Rau</td>
                              <td>Lyric_Rau39@gmail.com</td>
                              <td>Money Market Account</td>
                          </tr>
                          <tr>
                              <td>Mariela</td>
                              <td>Davis</td>
                              <td>Mariela_Davis43@hotmail.com</td>
                              <td>Checking Account</td>
                          </tr>
                          <tr>
                              <td>Estefania</td>
                              <td>Spencer</td>
                              <td>Estefania.Spencer@gmail.com</td>
                              <td>Personal Loan Account</td>
                          </tr>
                          <tr>
                              <td>Dolores</td>
                              <td>Rau</td>
                              <td>Dolores_Rau@hotmail.com</td>
                              <td>Personal Loan Account</td>
                          </tr>
                          <tr>
                              <td>Norma</td>
                              <td>Bahringer</td>
                              <td>Norma34@hotmail.com</td>
                              <td>Personal Loan Account</td>
                          </tr>
                          <tr>
                              <td>Letitia</td>
                              <td>Parisian</td>
                              <td>Letitia96@gmail.com</td>
                              <td>Checking Account</td>
                          </tr>
                          <tr>
                              <td>Earlene</td>
                              <td>Stracke</td>
                              <td>Earlene.Stracke64@hotmail.com</td>
                              <td>Home Loan Account</td>
                          </tr>
                          <tr>
                              <td>Lawson</td>
                              <td>Sanford</td>
                              <td>Lawson.Sanford@yahoo.com</td>
                              <td>Home Loan Account</td>
                          </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
