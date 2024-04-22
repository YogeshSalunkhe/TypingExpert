<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'?>

    <!-- Paragraph -->
    <div class="container-fluid motive" id="sentence">
        <div class="row pt-3">
            <div class="col-md-10 offset-lg-1 m-5 mx-auto lessonwords">
            PHP has a large and active community of developers, which means there are plenty 
            of resources available online, including documentation, tutorials, forums, and user groups,
             making it easier for developers to get help and support when needed.
        </div>
    </div>
    <!-- End Paragraph-->
    <!-- Timer -->
    <div class="container-fluid">
        <div class="row">
            <div class="timer col-md-10 offset-lg-1 my-1 d-flex justify-content-center">
                <div class="badge bg-success mx-5">Correct word : <span id="correct"> </span></div>
                <div class="badge bg-danger mx-5">Incorrect word: <span id="incorrect"> </span></div>
                <div id="display" class="badge bg-warning d-flex mx-5"><span id="minute">00</span>: <span id="second">00</span></div>
              </div>
        </div>
    </div>
    <!-- End Timer -->
    <!-- Keyboard -->
    <div class="container-fluid py-5 motive" id="keyboard">
        <div class="row">
            <div class="w-100 mx-auto keyboard">
                <div class="keyboard-row mb-2 text-center">
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">~</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">1</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">2</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">3</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">4</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">5</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">6</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">7</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">8</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">9</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">0</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">-</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">+</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning px-3">backspace</button>
                </div>
                <div class="keyboard-row mb-2 text-center">
                    <button class="key mx-1 py-2 px-5 btn btn-outline-warning">tab &#8633;</button>
                    <button class="key mx-1 py-2 px-3 btn btn-outline-warning">Q</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">W</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">E</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">R</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">T</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">Y</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">U</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">I</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">O</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">P</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">[</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">]</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">\</button>
                </div>
                <div class="keyboard-row mb-2 text-center">
                    <button class="key mx-1 py-2 px-5 btn btn-outline-warning">caps lock</button>
                    <button class="key mx-1 py-2 px-3 btn btn-outline-warning">A</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">S</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">D</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">F</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">G</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">H</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">J</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">K</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">L</button>
                    <button class="key mx-1 py-2 px-3 btn btn-outline-warning">;</button>
                    <button class="key mx-1 py-2 px-3 btn btn-outline-warning">"</button>
                    <button class="key mx-1 py-2 px-5 btn btn-outline-warning">enter</button>
                </div>
                <div class="keyboard-row mb-2 text-center">
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning" style="width: 12%;">shift</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">Z</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">X</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">C</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">V</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">B</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">N</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">M</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">,</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">.</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning">?</button>
                    <button class="key mx-1 py-2 px-4 btn btn-outline-warning" style="width: 12.1%;">shift</button>
                </div>
                <div class="keyboard-row mb-2 text-center">
                    <button class="key mx-1 py-2 px-5 btn btn-outline-warning">ctrl</button>
                    <button class="key mx-1 py-2 px-3 btn btn-outline-warning">alt</button>
                    <button class="key mx-1 py-2 px-3 btn btn-outline-warning" style="width: 50.7%;">space</button>
                    <button class="key mx-1 py-2 px- btn btn-outline-warning">alt</button>
                    <button class="key mx-1 py-2 px-5 btn btn-outline-warning">ctrl</button>
                </div>
            </div> 
            <!-- More rows can be added similarly -->
        </div>
    </div>
    <!-- End Keyboard-->
    <?php include 'footer.php'?>

</html>