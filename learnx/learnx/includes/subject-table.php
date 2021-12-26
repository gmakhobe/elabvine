<?php

if ($Physics == 'Yes') {
    $tableRow1 = "<tr style='color:#034f84;'>
                              <td>
                                 Physics Lab <span class='badge'>Active</span>
                              </td>
                              <td>
                                 <a href='subject/physics/index.php'><button class='btn btn-success'>
                                 Explore
                                 </button></a>
                              </td>
                           </tr>";
} else {
    $tableRow1 = "<tr class='warning' style='color:#034f84;'>
                              <td>
                                 Physics Lab<span class='badge'>Buy Access</span></b>
                              </td>
                              <td>
                                 <a href='#'><button class='btn disabled btn-success'>
                                 Explore
                                 </button></a>
                              </td>
                           </tr>";
}
if ($Maths == 'Yes') {
    $tableRow2 = "<tr style='color:#034f84;'>
                              <td>
                                 Maths Lab <span class='badge'>Active</span>
                              </td>
                              <td>
                                 <a href='subject/mathematics/index.php'><button class='btn btn-success'>
                                 Explore
                                 </button></a>
                              </td>
                           </tr>";
} else {
    $tableRow2 = "<tr class='warning' style='color:#034f84;'>
                              <td>
                                 Maths Lab<span class='badge'>Buy Access</span></b>
                              </td>
                              <td>
                                 <a href='#'><button class='btn disabled btn-success'>
                                 Explore
                                 </button></a>
                              </td>
                           </tr>";
}
?>