<!DOCTYPE html>
<html>
  <head>
  <title>Data Pesantren Berdasarkan Provinsi</title>
    <style>
    /* --------------------------------------------------------------
    Hartija Css Print Framework
    * Version: 1.0
    -------------------------------------------------------------- */
    body {
        width:100% !important;
        margin:0 !important;
        padding:0 !important;
        line-height: 1.45;
        font-family: Garamond,"Times New Roman", serif;
        color: #000;
        background: none;
        font-size: 14pt;
    }

    /* Headings */
    h1,h2,h3,h4,h5,h6 { page-break-after:avoid; }
    h1{font-size:19pt;}
    h2{font-size:17pt;}
    h3{font-size:15pt;}
    h4,h5,h6{font-size:14pt;}
    p, h2, h3 { orphans: 3; widows: 3; }
    code { font: 12pt Courier, monospace; }
    blockquote { margin: 1.2em; padding: 1em; font-size: 12pt; }
    hr { background-color: #ccc; }

    /* Images */
    img { float: left; margin: 1em 1.5em 1.5em 0; max-width: 100% !important; }
    a img { border: none; }

    /* Links */
    a:link, a:visited { background: transparent; font-weight: 700; text-decoration: underlin\
    e;color:#333; }
    a:link[href^="http://"]:after, a[href^="http://"]:visited:after { content: " (" attr(hre\
    f) ") "; font-size: 90%; }
    abbr[title]:after { content: " (" attr(title) ")"; }

    /* Don't show linked images */
    a[href^="http://"] {color:#000; }
    a[href$=".jpg"]:after, a[href$=".jpeg"]:after, a[href$=".gif"]:after, a[href$=".png"]:af\
    ter { content: " (" attr(href) ") "; display:none; }

    /* Don't show links that are fragment identifiers, or use the `javascript:` pseudo proto\
    col .. taken from html5boilerplate */
    a[href^="#"]:after, a[href^="javascript:"]:after {content: "";}

    /* Table */
    table { margin: 1px; text-align:left; }
    th { border-bottom: 1px solid #333; font-weight: bold; }
    td { border-bottom: 1px solid #333; }
    th,td { padding: 4px 10px 4px 0; }
    tfoot { font-style: italic; }
    caption { background: #fff; margin-bottom:2em; text-align:left; }
    thead {display: table-header-group;}
    img,tr {page-break-inside: avoid;}
    /* Hide various parts from the site
    #header, #footer, #navigation, #rightSideBar, #leftSideBar
    {display:none;}
    */
    </style>
  </head>
  <body>
    <h1>Data Pesantren Berdasarkan Provinsi</h1>
    <hr>
    <table>
      <thead>
        <tr>
          <td>No</td>
          <td>NSPP</td>
          <td>Nama Pesantren</td>
          <td>Nama Pengasuh</td>
          <td>Jumlah Santri</td>
          <td>Jumlah Santri Mukim</td>
          <td>No Telepon</td>
          <td>Alamat Website</td>
          <td>Alamat Pesantren</td>
          <td>Kecamatan</td>
          <td>Kabupaten</td>
          <td>Provinsi</td>
        </tr>
        </thead>
      <tbody>
        @foreach ($pesantrens as $pesantren)
        <tr>
          <td>{{ $row++ }}</td>
          <td>{{ $pesantren->NSPP }}</td>
          <td>{{ $pesantren->nama_pesantren }}</td>
          <td>{{ $pesantren->nama_pengasuh }}</td>
          <td>{{ $pesantren->jumlah_santri }}</td>
          <td>{{ $pesantren->jumlah_santri_mukim }}</td>
          <td>{{ $pesantren->no_telepon }}</td>
          <td>{{ $pesantren->website }}</td>
          <td>{{ $pesantren->alamat_pesantren }}</td>
          <td>{{ $pesantren->kecamatan_pesantren }}</td>
          <td>{{ $pesantren->nama_kabupaten }}</td>
          <td>{{ $pesantren->nama_provinsi }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>
