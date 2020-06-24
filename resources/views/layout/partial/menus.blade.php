<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg order-lg-first">
        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
          @if(session()->get("level") == "direktur")
          <li class="nav-item">
            <a href="{{route("private.direktur.home")}}" class="nav-link"><i class="fe fe-home"></i> Beranda</a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i> Data Master</a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="" id="mastersatuan" class="dropdown-item ">Satuan</a>
              <a href="" id="masterbb" class="dropdown-item ">Bahan Baku</a>
              <a href="" id="mastertransportasi" class="dropdown-item ">Transportasi</a>
              <a href="" id="mastersuplier" class="dropdown-item ">Suplier</a>
              <a href="" id="masterpelanggan" class="dropdown-item ">Pelanggan</a>
              <a href="" id="masterproduk" class="dropdown-item ">Produk dan Komposisi</a>
              <a href="" id="pengguna" class="dropdown-item ">Akun SCM</a>
              <a href="" id="pengguna_pos" class="dropdown-item ">Akun POS</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-eye"></i> Monitoring</a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="#" class="dropdown-item " id="mpesanan">Pemesanan Produk</a>
              <a href="#" class="dropdown-item " id="mpengadaan">Pengadaan</a>
              <a href="#" class="dropdown-item " id="shippingdirektur">Pengiriman</a>
              <a href="#" class="dropdown-item " id="produksimonitoring">Produksi</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="" id="pengaturan" class="nav-link"><i class="fe fe-settings"></i> Pengaturan Aplikasi</a>
          </li>
          <li class="nav-item">
            <a href="" id="sign" class="nav-link"><i class="fa fa-certificate"></i> E-Signature</a>
          </li>

          @elseif(session()->get("level") == "pengadaan")
          <li class="nav-item">
            <a href="{{route("private.pengadaan.home")}}" class="nav-link"><i class="fe fe-home"></i> Beranda</a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i> Data Master</a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="" id="mastersatuan" class="dropdown-item ">Satuan</a>
              <a href="" id="mastersuplier" class="dropdown-item ">Suplier</a>
              <a href="" id="masterbb" class="dropdown-item ">Bahan Baku</a>
              <a href="" id="masterproduk" class="dropdown-item ">Produk</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-shopping-cart"></i> Pengadaan</a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="" id="pbahanbaku" class="dropdown-item ">Bahan Baku</a>
              <a href="" id="pproduk" class="dropdown-item ">Produk</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i>Laporan</a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="" id="lapbb" class="dropdown-item ">Pengadaan Bahan Baku</a>
              <a href="" id="lapproduk" class="dropdown-item ">Pengadaan Produk</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="" id="sign" class="nav-link"><i class="fa fa-certificate"></i> E-Signature</a>
          </li>
          @elseif(session()->get("level") == "gudang")
          <li class="nav-item">
            <a href="{{route("private.gudang.home")}}" class="nav-link"><i class="fe fe-home"></i> Beranda</a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i> Data Master</a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="" id="mastersatuan" class="dropdown-item ">Satuan</a>
              <a href="" id="mastersuplier" class="dropdown-item ">Suplier</a>
              <a href="" id="masterbb" class="dropdown-item ">Bahan Baku</a>
              <a href="" id="masterproduk" class="dropdown-item ">Produk</a>

            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-download"></i>Penerimaan Barang</a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="" id="pbahanbaku" class="dropdown-item ">Pengadaan Bahan Baku</a>
              <a href="" id="pproduk" class="dropdown-item ">Pengadaan Produk</a>
              <a href="#" class="dropdown-item " id="produksimonitoring">Produksi Barang</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i>Laporan</a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="" id="lapbb" class="dropdown-item ">Bahan Baku</a>
              <a href="" id="lapproduk" class="dropdown-item ">Produk</a>
              <a href="" id="laphilang" class="dropdown-item ">Kehilangan Produk / Bahan Baku</a>

            </div>
          </li>
          <li class="nav-item">
            <a href="" id="permintaan" class="nav-link"><i class="fa fa-paper-plane"></i> Permintaan Barang</a>
          </li>
          <li class="nav-item">
            <a href="" id="sign" class="nav-link"><i class="fa fa-certificate"></i> E-Signature</a>
          </li>
          @elseif(session()->get("level") == "pemasaran")
          <li class="nav-item">
            <a href="{{route("private.pemasaran.home")}}" class="nav-link"><i class="fe fe-home"></i> Beranda</a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i> Data Master</a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="" id="masterpelanggan" class="dropdown-item ">Pelanggan</a>
              <a href="" id="masterproduk" class="dropdown-item ">Produk</a>
              <a href="" id="mastertransportasi" class="dropdown-item ">Transportasi</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-upload"></i>Pemasaran</a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="#" id="pmproduk" class="dropdown-item ">Penjualan Produk</a>
              <a href="#" id="produklist" class="dropdown-item ">Daftar Penjualan Produk</a>
              <a href="#" id="shipping" class="dropdown-item ">Pengiriman Produk</a>
              <!-- <a href="" id="manajemenpos" class="dropdown-item ">Manajemen PoS</a> -->
            </div>
          </li>
          <!-- <li class="nav-item dropdown">
            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fa fa-spinner"></i> Marketplace Monitoring</a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="" id="lazada" class="dropdown-item ">Lazada</a>
              <a href="" id="shopee" class="dropdown-item ">Shopee</a>
              <a href="" id="tokopedia" class="dropdown-item ">Tokopedia</a>
              <a href="" id="bl" class="dropdown-item ">Bukalapak</a>
            </div>
          </li> -->
          <li class="nav-item dropdown">
            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i>Laporan</a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="" id="lppmproduk" class="dropdown-item ">Pemasaran Produk</a>
              <a href="" id="lppmpengiriman" class="dropdown-item ">Pengiriman Produk</a>
            </div>
          </li>

          <li class="nav-item">
            <a href="" id="sign" class="nav-link"><i class="fa fa-certificate"></i> E-Signature</a>
          </li>
          @elseif(session()->get("level") == "produksi")
          <li class="nav-item">
            <a href="{{route("produksi.home")}}" class="nav-link"><i class="fe fe-home"></i> Beranda</a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i> Data Master</a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="" id="masterbb" class="dropdown-item ">Bahan Baku</a>
              <a href="" id="masterproduk" class="dropdown-item ">Produk dan Komposisi</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fa fa-industry "></i> Produksi</a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="javascript:void(0)" id="produksi" class="dropdown-item ">Produksi</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i>Laporan</a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="" id="lapproduksi" class="dropdown-item ">Produksi</a>
            </div>
          </li>

          <li class="nav-item">
            <a href="" id="sign" class="nav-link"><i class="fa fa-certificate"></i> E-Signature</a>
          </li>
          @endif
          <li class="nav-item">
            <a href="#"  class="nav-link"><i class="fa fa-clock-o"></i> <b id="time_clock">00:00:00</b></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
