<?php
function biodata()
{
  $data = array(
    "name" => "Budi Santoso",
    "age" => 21,
    "address" => "Jl. P. Diponegoro 32 Kutoarjo",
    "hobbies" => "Membaca Novel",
    "is_married" => false,
    "list_school" => array(
      array(
        "name" => "SD N Bandung",
        "year_in" => 2004,
        "year_out" => 2010,
        "major" => null
      ),
      array(
        "name" => "SMP N 12 Purworejo",
        "year_in" => 2010,
        "year_out" => 2013,
        "major" => null
      ),
      array(
        "name" => "SMK Negeri 6 Purworejo",
        "year_in" => 2013,
        "year_out" => 2016,
        "major" => "Multimedia"
      ),
      array(
        "name" => "Politeknik Sawunggalih Aji",
        "year_in" => 2016,
        "year_out" => 2019,
        "major" => "Teknik Informatika"
      )
    ),
    "skills" => array(
      array(
        "skiil_name" => "HTML",
        "level" => "beginer"
      ),
      array(
        "skiil_name" => "CSS",
        "level" => "beginer"
      ),
      array(
        "skiil_name" => "JavaScript",
        "level" => "beginner"
      ),
      array(
        "skiil_name" => "PHP",
        "level" => "beginer"
      ),
    ),
    "interest_in_coding" => true
  );

  $biodata_json = json_encode($data);
  return $biodata_json;
}

echo biodata();