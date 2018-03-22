<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ChordsUp! - Chords Transpose, Chord Progression Generato</title>
    <meta name="description" content="Chords progression generator and music transponator.">
    <meta name="keywords" content="guitar transpose, change chords, chords transpose,  key transpose, guitar music transpose, Chord Progression Generator">
    <meta name="author" content="Laszlo Szabo">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="transponator.js"></script>
    <script type="text/javascript" src="chordprogression.js"></script>

    <!--adsense-->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3783587879253727",
    enable_page_level_ads: true
  });
</script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="0">

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
            



                <a class="navbar-brand" href="#home">ChordsUp!</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#home">Home</a>
                    </li>
                    <li><a href="#transponator">Transponator</a>
                    </li>
                    <li><a href="#progressiont">Chord progression</a>
                    </li>
                    <li><a href="#infos">Information</a>
                    </li>
                    <li><a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="container" style="margin-top:50px" id="home">
            <h1>Chords Up!</h1>
            <p>Music key transponator and chord progression generator</p>
        </div>
    </header>

    <section>
        <div class="container bg-3" id="transponator">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Chord transponator</h1>
                    <p>Transpose guitar tabs and chords with the click of a button! Choose the desired notes or chords.</p>
                </div>
                <div class="col-sm-6">
                    <h4>Get the code from <a href="https://github.com/OverrideStudio/chordsup/releases/tag/v1.0" target="_blank">GitHub!</a></h4>
                    <div class="well">
                        <p>Why Transposing? To play in a key that is easier for another musician, or for the singer, or to make a song easier to play. You man want to transpose a song to a key that is easier to play on the guitar.</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- infos trnasponator -->
        <div class="container">
            <h3>Transposition</h3>
            <div class="panel-group" id="accordion_transponator">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion_transponator" href="#collapse1">
        How to use?</a>
      </h4>
                    



                        <div id="collapse1" class="panel-collapse collapse">
                            
                                <ul>
                                    <li>How can i use the transponator?</li>

                                    <ul>
                                        <li>Choose your note (Original key)</li>
                                        <li>Click on the Add button. Yout note appear in the Original keys box</li>
                                        <li>Select, how many semitones you wannt to transpose</li>
                                        <li>You can see the result in the Transposed keys box</li>

                                    </ul>

                                    <li>How can is change one key?</li>
                                    Select the desired note, then click on the Change button. Select your new note. In the Transposed keys box the matching note changed automatically.

                                    <li>How can i change the amount of tranpsosition?</li>
                                    Just select another amount of seminotes. In the Transposed keys box all notes changed automatically.

                                    <li>How can i delete notes?</li>
                                    Select the desired note, and click on the Delete button. In the Transposed keys box the matching note removed automatically.

                                    <li>How can i add another note?</li>
                                    Click on the Add button. If you checked one note in the Original key box, the new note appear after it. If you selected the last, or none tone, the new tone appear at the end. In the Transposed keys box the matching note added automatically.
                                </ul>

                            
                        </div>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion_transponator" href="#collapse_methods">Shifting Methods</a>
        </h4>
                    



                    </div>
                    <div id="collapse_methods" class="panel-collapse collapse">
                        <div class="panel-body">
                            <dl>
                                <dt>Capo</dt>
                                <dd>Use a Capo on the guitar</dd>
                                <dt>Use the guitar barre chords</dt>
                                <dd>Guitar barre chords are hard to learn, but they are extremely powerfull.</dd>
                                <dt>Fret Shifting Method</dt>
                                <dd>One of the easiest ways to transpose a song is to shift your position on the fretboard of the guitar. If you need to transpose up a whole step, simply shift all your notes up two frets. </dd>
                                <dt>Using Software</dt>
                                <dd>Use notation software like Guitar Pro or Sibelius to transpose your song.</dd>
                            </dl>

                        </div>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion_transponator" href="#collapse2">Example</a>
        </h4>
                    



                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>
                                Lets see an example, Hey Joe from Jimi Hendrix.<br> This is one of the most famous guitar song. The song has 5 chords: C, G, D, A and E. Select from the Original key list the first chord, an C. Click ont the Add button. Add all the 5 chords (notes) to the Original keys box. Select from the Semitones list, how much semitones yout want shift. In the Transposed keys box automatically apper the result. <br>If yout wannt play 1 note (2 semitones) higher, just select 2 semitones, and you can see your new chords (tones): D, A, E, F#.

                            </p>

                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion_transponator" href="#collapse_int">Intervals</a>
        </h4>
                    



                    </div>
                    <div id="collapse_int" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Semitones</th>
                                            <th>Common Name</th>
                                            <th>Alternative Names</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>0</td>
                                            <td>perfect unison</td>
                                            <td>diminished second</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>minor second</td>
                                            <td>augmented unison</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>major second</td>
                                            <td>diminished third</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>minor third</td>
                                            <td>augmented second</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>major third</td>
                                            <td>diminished fourth</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>perfect fourth</td>
                                            <td>augmented third</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>tritone</td>
                                            <td>augmented fourth</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>perfect fifth</td>
                                            <td>diminished sixth</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>minor sixth</td>
                                            <td>augmented fifth</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>minor sixth </td>
                                            <td>augmented seventh</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td> minor seventh</td>
                                            <td>augmented sixth</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>major seventh</td>
                                            <td>diminished octave</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>perfect octave</td>
                                            <td>augmented seventh</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        </div>


        <div class="container bg-1">
            <div class="row">
                <div class="col-sm-6">
                    <legend>Action</legend>
                    <button type="button" class="btn btn-primary" id="createRadio">Add</button>
                    <button type="button" class="btn btn-success" id="removeRadio">Delete</button>
                    <button type="button" class="btn btn-info" id="changeRadio">Change</button>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <form>
                                <legend>Origal key</legend>
                                <select class="form-control" id="selTranspose">
                                    <option>A</option>
                                    <option>A#</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>C#</option>
                                    <option>D</option>
                                    <option>D#</option>
                                    <option>E</option>
                                    <option>F</option>
                                    <option>F#</option>
                                    <option>G</option>
                                    <option>G#</option>
                                </select>
                            </form>
                        </div>
                        <div class="col-sm-6">
                            <p>
                                <legend>Semitones</legend>
                                <input id="spinner" name="value">

                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class=" col-sm-6">
                    <div class="panel-small">
                        <p class="panel-heading-small">Original keys</p>
                        <div id="addChords" class="panel-body">
                        </div>
                    </div>
                </div>
                <div class=" col-sm-6">
                    <div class="panel-small">
                        <p class="panel-heading-small">Transposed keys</p>
                        <div id="addChordsClone" class="panel-body">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>

        <!-- CP -->
        <div class="container bg-3" id="progressiont">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Chord progression</h1>
                    <p>This application shows few popular, interesting or famous chord progression. Choose your main key, and chose minor or major. Useful for practicing, writing songs, jamming or rehearsal with your band! This is a collection of chord progressions for guitar players that you can repurpose for your own songwriting, riff developing and every-day guitar playing. Have fun, play with style and emotion!</p>
                </div>
                <div class="col-sm-6 ">
                    <h3 id="info3"></h3>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalScales">List of major scale notes</button>
                    <!-- Modal -->
<div id="modalScales" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">List of major scale notes</h4>
      </div>
      <div class="modal-body">
 <div class="table-responsive">      
<table  class="table">
<tbody>
<tr >
<td>Scale</td>
<td>I</td>
<td>II / IX</td>
<td>III</td>
<td>IV / XI</td>
<td>V</td>
<td>VI / XIII</td>
<td>VII</td>
<td>I (octave)</td>
</tr>
<tr>
<td><span style="color: red;">A</span></td>
<td>A</td>
<td>B</td>
<td>C♯</td>
<td>D</td>
<td>E</td>
<td>F♯</td>
<td>G♯</td>
<td>A</td>
</tr>
<tr>
<td><span style="color: red;">A♯</span></td>
<td>A♯</td>
<td>B♯</td>
<td>C♯♯</td>
<td>D♯</td>
<td>E♯</td>
<td>F♯♯</td>
<td>G♯♯</td>
<td>A♯</td>
</tr>
<tr>
<td><span style="color: red;">B♭</span></td>
<td>B♭</td>
<td>C</td>
<td>D</td>
<td>E♭</td>
<td>F</td>
<td>G</td>
<td>A</td>
<td>B♭</td>
</tr>
<tr>
<td><span style="color: red;">B</span></td>
<td>B</td>
<td>C♯</td>
<td>D♯</td>
<td>E</td>
<td>F♯</td>
<td>G♯</td>
<td>A♯</td>
<td>B</td>
</tr>
<tr>
<td><span style="color: red;">C</span></td>
<td>C</td>
<td>D</td>
<td>E</td>
<td>F</td>
<td>G</td>
<td>A</td>
<td>B</td>
<td>C</td>
</tr>
<tr>
<td><span style="color: red;">C♯</span></td>
<td>C♯</td>
<td>D♯</td>
<td>E♯</td>
<td>F♯</td>
<td>G♯</td>
<td>A♯</td>
<td>B♯</td>
<td>C♯</td>
</tr>
<tr>
<td><span style="color: red;">D♭</span></td>
<td>D♭</td>
<td>E♭</td>
<td>F</td>
<td>G♭</td>
<td>A♭</td>
<td>B♭</td>
<td>C</td>
<td>D♭</td>
</tr>
<tr>
<td><span style="color: red;">D</span></td>
<td>D</td>
<td>E</td>
<td>F♯</td>
<td>G</td>
<td>A</td>
<td>B</td>
<td>C♯</td>
<td>D</td>
</tr>
<tr>
<td><span style="color: red;">D♯</span></td>
<td>D♯</td>
<td>E♯</td>
<td>F♯♯</td>
<td>G♯</td>
<td>A♯</td>
<td>B♯</td>
<td>C♯♯</td>
<td>D♯</td>
</tr>
<tr>
<td><span style="color: red;">E♭</span></td>
<td>E♭</td>
<td>F</td>
<td>G</td>
<td>A♭</td>
<td>B♭</td>
<td>C</td>
<td>D</td>
<td>E♭</td>
</tr>
<tr>
<td><span style="color: red;">E</span></td>
<td>E</td>
<td>F♯</td>
<td>G♯</td>
<td>A</td>
<td>B</td>
<td>C♯</td>
<td>D♯</td>
<td>E</td>
</tr>
<tr>
<td><span style="color: red;">F</span></td>
<td>F</td>
<td>G</td>
<td>A</td>
<td>B♭</td>
<td>C</td>
<td>D</td>
<td>E</td>
<td>F</td>
</tr>
<tr>
<td><span style="color: red;">F♯</span></td>
<td>F♯</td>
<td>G♯</td>
<td>A♯</td>
<td>B</td>
<td>C♯</td>
<td>D♯</td>
<td>E♯</td>
<td>F♯</td>
</tr>
<tr>
<td><span style="color: red;">G♭</span></td>
<td>G♭</td>
<td>A♭</td>
<td>B♭</td>
<td>C♭</td>
<td>D♭</td>
<td>E♭</td>
<td>F</td>
<td>G♭</td>
</tr>
<tr>
<td><span style="color: red;">G</span></td>
<td>G</td>
<td>A</td>
<td>B</td>
<td>C</td>
<td>D</td>
<td>E</td>
<td>F♯</td>
<td>G</td>
</tr>
<tr class="shaded">
<td><span style="color: red;">G♯</span></td>
<td>G♯</td>
<td>A♯</td>
<td>B♯</td>
<td>C♯</td>
<td>D♯</td>
<td>E♯</td>
<td>F♯♯</td>
<td>G♯</td>
</tr>
<tr>
<td><span style="color: red;">A♭</span></td>
<td>A♭</td>
<td>B♭</td>
<td>C</td>
<td>D♭</td>
<td>E♭</td>
<td>F</td>
<td>G</td>
<td>A♭</td>
</tr>
</tbody>
</table>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                    
                </div>
            </div>
        </div>
        <div class="container bg-1">
            <div class="row">
                <!-- select -->
                <div class="col-sm-4">
                    <form>
                        <legend>Key</legend>
                        <select class="form-control" id="select1">
                            <option>A</option>
                            <option>A#</option>
                            <option>B</option>
                            <option>C</option>
                            <option>C#</option>
                            <option>D</option>
                            <option>D#</option>
                            <option>E</option>
                            <option>F</option>
                            <option>F#</option>
                            <option>G</option>
                            <option>G#</option>
                        </select>
                    </form>
                </div>
                <div class="col-sm-4">
                    <!-- radio -->
                    <fieldset>
                        <legend>Major or minor scale </legend>
                        <label class="radio-inline input-lg custom-control custom-radio" for="radio-1">Major</label>
                        <input type="radio" name="radio" value="major" id="radio-1" checked>
                        <label class="radio-inline input-lg" for="radio-2">Minor</label>
                        <input type="radio" name="radio" value="minor" id="radio-2">
                    </fieldset>
                </div>
                <div class="col-sm-4 bg-2"> <a href="https://play.google.com/store/apps/details?id=sleepingcode.com.chordsup&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"><img class="img-responsive" alt="Get it on Google Play" src="https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png"/></a> </div>
            </div>

        </div>

        <div id="progression" class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel-small">
                        <p class="panel-heading-small">Twoo chords</p>
                        <div id="p1" class="panel-body"> </div>
                    </div>
                    <div class="panel-small">
                        <p class="panel-heading-small">Three chords</p>
                        <div id="p2" class="panel-body"> </div>
                        <div class="panel-small">
                            <p class="panel-heading-small">50s progression</p>
                            <div id="p3" class="panel-body"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel-small">
                        <p class="panel-heading-small">Andalusian cadence</p>
                        <div id="p4" class="panel-body"> </div>
                        <div class="panel-small">
                            <p class="panel-heading-small">Popular</p>
                            <div id="p5" class="panel-body"> </div>
                        </div>
                        <div class="panel-small">
                            <p class="panel-heading-small">Circle progression</p>
                            <div id="p6" class="panel-body"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel-small">
                        <p class="panel-heading-small">12-bar blues</p>
                        <div id="p7" class="panel-body"> </div>
                    </div>
                    <div class="panel-small">
                        <p class="panel-heading-small">12-bar blues 2</p>
                        <div id="p8" class="panel-body"> </div>
                    </div>
                    <div class="panel-small">
                        <p class="panel-heading-small">12-bar blues 3</p>
                        <div id="p9" class="panel-body"> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- bg -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <img src="bg1.png" class="img-responsive center-block" alt="guitar">
            </div>
        </div>
    </div>

    <!-- infos accordion -->
    <div class="container" id="infos">
        <h3>Information</h3>
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Chord progression</a>
      </h4>
                



                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <a href="https://en.wikipedia.org/wiki/Chord_progression" target="_blank">See more at Wikipedia</a><br>
                        <p class="column">A chord progression or harmonic progression is a succession of musical chords, which are two or more notes, typically sounded simultaneously. Chord progressions are the foundation of harmony in Western musical tradition from the common practice era of Classical music to the 21st century. Chord progressions are the foundation of Western popular music styles (e.g., pop music, rock music) and traditional music (e.g., blues and jazz). In tonal music, chord progressions have the function of establishing or contradicting a tonality, the technical name for what is commonly understood as the "key" of a song or piece. Chord progressions are usually expressed by Roman numerals in Classical music music theory; for example, the common chord progression I vi/ii V7. In many styles of popular and traditional music, chord progressions are expressed using the name and "quality" of the chords. For example, the previously mentioned chord progression, in the key of C Major, would be written as C Major A minor/D minor G7 in a fake book or lead sheet. In the first chord, C Major, the "C" indicates that the chord is built on the root note "C"; the word "Major" indicates that a major chord is built on this "C" note. In rock and blues, musicians also often refer to chord progressions using Roman numerals, as this facilitates transposing a song to a new key. For example, rock and blues musicians often think of the 12 bar blues as consisting of I, IV and V chords. Thus a simple version of the 12-bar blues might be expressed as I/I/I/I IV/IV/I/I V/IV/I/I. By thinking of this blues progression in Roman numerals, a backup band or rhythm section could be instructed by a bandleader to do the chord progression in any key. For example, if the bandleader asked the band to play this chord progression in the key of C Major, the chords would be C/C/C/C F/F/C/C G/F/C/C. If the bandleader wanted to play the song in the key of G Major, the chords would be G/G/G/G C/C/G/G D/C/G/G, and so on. The complexity of a chord progression varies from genre to genre and over different historical periods. Some pop and rock songs from the 1980s to the 2010s have fairly simple chord progressions. Funk emphasizes the groove and rhythm as the key element, so entire funk songs may be based on one chord. Some jazz-funk songs are based on a two-, three- or four-chord vamp. Some punk and hardcore punk songs use only a few chords. On the other hand, bebop jazz songs may have 32 bar song forms with one or two chord changes every bar.</p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
        More abouth chord progression</a>
      </h4>
                



                </div>
                <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">
                        <a href="https://en.wikipedia.org/wiki/Chord_progression" target="_blank">See more at Wikipedia</a><br>
                        <p class="column">A chord may be built upon any note of a musical scale, therefore a seven-note scale allows seven basic chords (for that scale's key), each degree of the scale becoming the root of its own chord. A chord built upon the note A is an A chord of some type (major/minor/diminished, etc.) The harmonic function of any particular chord depends on the context of the particular chord progression in which it is found. The diatonic (scale-based, not including notes other than the seven notes of the given scale) harmonization of any major scale results in three major triads. They are based on the first, fourth, and fifth scale degrees (the tonic, called the I chord in Roman numeral analysis; the subdominant, the ii or IV chord in Roman numeral analysis; and dominant, the V or V7 chord[3] – see three-chord song). These three triads include, and therefore can harmonize, every note of that scale. Many simple traditional music, folk music and rock and roll songs use only these three chord types (e.g., Wild Thing, which uses I, IV and V chords). The same scale also provides three relative minor chords, one related to each of the three major chords. These are based upon the sixth, second and third degrees of the major scale and stand in the same relationship to one another as do the three majors, so that they may be viewed as the first (i), fourth (iv) and fifth (v) degrees of the relative minor key. For example, if we are in the key of C Major, its relative minor key is the key of A minor. In the key of A minor, the i, iv and v chords would be A minor, D minor and E minor. Separate from these six common chords there is one degree of the scale, the seventh, that results in a diminished chord.[4] Thus in the key of C Major, the seventh note of the scale, B, would be the root note of a diminished triad (the notes B, D and F). In addition, extra chromatic notes may be added to any chord. Chromatic notes are notes that are not in the key. Returning to our example of a song in C Major, this is a key with no sharps or flats. The key of C Major is the "white notes" on a piano. Any of the chords in the key of C Major can have one or more notes in their triad sharpened or flattened, which would require the use, in C Major, of the "black keys". Perhaps the most basic chromatic alteration in simple folk songs is the use of the sharpened fourth scale degree. In a song in C Major, the diatonic fourth scale degree if F. Sharpening this fourth degree by one semitone gives F#. Thus with the F#, the ii chord (normally the notes D, F and A) becomes the notes D, F#, A (a D Major chord; the technical term for this chord is a secondary dominant) these notes are also selected from the original scale the harmony remains diatonic. If new chromatic intervals are introduced then a change of scale or modulation occurs, which may bring the sense of a change of tonal center (commonly called moving to a new key). This in turn may lead to a resolution back to the original key, so that the entire sequence of chords helps create an extended musical form and a sense of movement and interest for the listener. Although all this allows for a large number of possible progressions (depending upon the length of the progression), in practice, progressions are often limited to a few bars' length and certain progressions are favored above others: there is a certain amount of fashion in this and a chord progression may even define an entire genre.[citation needed] In western classical notation, chords built on the scale are numbered with Roman numerals. A D chord will be figured I in the key of D, for example, but V in the key of G. Minor chords are signified by lower case Roman, so that D minor in the key of C would be written ii. Other forms of chord notation have been devised, from figured bass to the chord chart. These usually allow or even require a certain amount of improvisation.</p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"></h4>
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
        Examples</a>
    </div>
    <div id="collapse5" class="panel-collapse collapse">
      <div class="panel-body">
       <h4>50s progression</h4>
                



                    <ol>
                        <dt>I'm the One</dt>
                        <dd>Dj Khaled</dd>
                        <dt>Messin' Around</dt>
                        <dd>Pitbull</dd>
                        <dt>Million Reasons</dt>
                        <dd>Lady Gaga</dd>
                        <dt>Close Your Eyes</dt>
                        <dd>Meghan Trainor</dd>
                        <dt>The Thin Ice</dt>
                        <dd>Pink Floyd</dd>
                        <dt>Happiness Is a Warm Gun</dt>
                        <dd>The Beatles</dd>
                        <dt>This Boy</dt>
                        <dd>The Beatles</dd>
                    </ol>
                    <h4>Andalusian cadence</h4>
                    <ol>
                        <dt>Good Vibrations</dt>
                        <dd>The Beach Boys</dd>
                        <dt>I'll Be Back</dt>
                        <dd> The Beatles</dd>
                        <dt>War Pigs</dt>
                        <dd>Black Sabbath</dd>
                        <dt>Sultans of Swing</dt>
                        <dd>Dire Straits</dd>
                        <dt>14 Years</dt>
                        <dd>Guns N' Roses</dd>
                        <dt>Smooth Criminal</dt>
                        <dd> Michael Jackson</dd>
                        <dt>Hit the Road, Jack</dt>
                        <dd>Ray Charles</dd>
                    </ol>

                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- footer -->

    <!-- adsense -->
    <div class="container">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- chordsup_2 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3783587879253727"
     data-ad-slot="2084109308"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
      </div>
    </div>

    <!--contact -->
    <div id="contact" class="bg-1">
        <div class="container">
            <h3 class="text-center">Contact</h3>


            <div class="row test">
                <div class="col-md-4">

                    <p><span class="glyphicon glyphicon-map-marker"></span>Debrecen</p>
                    <p><span class="glyphicon glyphicon-phone"></span>+36 20/480-47-57</p>
                    <p><span class="glyphicon glyphicon-envelope"></span>Email: szabolaszlo.mail@gmail.com</p>
                    <p><a href="/onepager.php" target="_blank">Abouth me</a></p>
					</div>
					<div class="col-md-8 ">
						<div class="row ">
							<!-- form -->
							<form action="<?php echo htmlspecialchars($_SERVER[ " PHP_SELF "]);?>" data-toggle="validator" role="form" method="post">
                        <div class="col-sm-6 form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Name" value="<?php echo $name;?>" required>
                            </div>
                        </div>
                        <div class="col-sm-6 form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class=" 	glyphicon glyphicon-envelope"></i></span>
                                <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email" value="<?php echo $email;?>" required data-error="">
                            </div>
                        </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class=" 	glyphicon glyphicon-pencil"></i></span>
                    <textarea class="form-control" rows="5" id="inputComment" name="inputComment" placeholder=Message value="<?php echo $comment;?>" required></textarea>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <button class="btn pull-right" type="submit">Send</button>
                        <p id="message">sdassd</p>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    </div>

    <?php 
// define variables and set to empty values
$name  = $email = $comment =  "";
	
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["inputName"]);
  $email = test_input($_POST["inputEmail"]);
  $comment = test_input($_POST["inputComment"]); 
	
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;	 
}

	
		
if (!empty($name) && !empty($email) && !empty($comment) ){	
	$msg="Név: ".$name."\n"."Email: ".$email."\n"."Üzenet: ".$comment;
	// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
	// send email
 mail("szabolaszlo.mail@gmail.com","chords up üzenet",$msg);
	echo "<script>document.getElementById('message').innerHTML=('Thank you!');</script>";
	//echo'<script>alert("I am an alert box!");</script>';
	echo'<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sleeping Code - Contact</h4>
        </div>
        <div class="modal-body">
          <p>Thank you! Message sent.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div><script>
$(document).ready(function(){
  
        $("#myModal").modal();
   
});
</script>';


} else {
		echo "<script>document.getElementById('message').innerHTML=('Get in touch!');</script>";
}

?>



</body>

</html>