// Ambil element yang dibutuhkan
let keyword = document.getElementById('keyword');
let searchButton = document.getElementById('search-button');
let studentTable = document.getElementById('student-table');

// Tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function () {
  // Buat objek ajax
  let xhr = new XMLHttpRequest();

  // Cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      studentTable.innerHTML = xhr.responseText;
    }
  };

  // Eksekusi ajax
  xhr.open('GET', 'ajax/student.php?keyword=' + keyword.value, true);
  xhr.send();
});
