@extends('layout')

@section('styles')


@endsection

@section('content')






  
    <div class="container">
   <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">請求書プレビュー</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
              <a class="dropdown-item" href="#">編集</a>
               <a class="dropdown-item" href="#">削除</a>
              <a class="dropdown-item" href="#">エクスポート</a>
            </div>
          </div>
        </div>
        <div class="container">
      <h1 style="text-align:center;"><span class="category">請求</span>書</h1>
      <div class="row">
        <div class="col-md-7 col-xs-7">
          <h2 id="name">Aホスピタル 御中</h2>
          〒<span id="zip">XXX-XXXXX</span><br/>
          <span id="address1">東京都XX区XXXX1-2-3</span><br/>
          <span id="address2">XXビル1F</span><br/>
          TEL:<span id="tel">03-1234-5678</span><br/>
          FAX:<span id="fax">00-0000-0000</span>
        </div>
        <div class="col-md-5 col-xs-5" style="text-align:right;">
          <big><span id="date">2013年8月31日</span></big><br/>
          <span class="category">請求</span>番号 <span id="code">YYYYMMDD-XX</span>
          <h3>株式会社ファミリア</h3>
          〒101-0052<br/>
          東京都港区六本木６−４−１<br/>
          六本木ヒルズハリウッドプラザ４F<br/>
          TEL: 03-5413-8567<br/>
          FAX: 03-5413-8568<br/>
          <br/>
          担当: <span id="person-in-charge">○○ ××</span>
        </div>
      </div>
      <div style="margin-top:2em;"></div>
      <div class="row">
        <div class="col-md-8 col-xs-8">
          <big>下記のとおり御<span class="category">請求</span>申し上げます。</big>
        </div>
        <div class="col-md-4 col-xs-4" style="text-align:right;">
          単位: 円
        </div>
      </div>

      <table class="table">
        <thead>
          <tr>
            <th style="width:4em;text-align:right;">項番</th><th>品名</th><th style="width:4em;text-align:right;">数量</th><th style="width:4em;">単位</th><th style="text-align:right;">単価</th><th style="text-align:right;">金額</th>
          </tr>
        </thead>
        <tbody>
          <tr class="row-template">
            <td class="num" style="text-align:right;">N</td><td class="name">PRODUCT NAME</td><td class="qty" style="text-align:right;">NN</td><td class="unit">人日</td><td class="unit-price" style="text-align:right;">XX,000</td><td class="price" style="text-align:right;">XX,000</td>
          </tr>
          <tr>
            <td colspan="3" rowspan="3"><div class="bank"><h4>振込先</h4>三菱東京UFJ銀行 東京支店 普通 0000000(カ<br/>又は<br/>楽天銀行　ビート支店 普通 0000001 (カ </div><h4>備考</h4></td><td colspan="2">小計</td><td class="minor-total" style="text-align:right;">XX,000</td>
          </tr>
          <tr>
            <td colspan="2">消費税(<span class="tax-rate">5</span>%)</td><td class="vat" style="text-align:right;">XX,000</td>
          </tr>
          <tr>
            <td colspan="2">合計</td><td style="text-align:right;"><big><strong><span class="grand-total">XX,000</span></strong></big></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
    </div>

@endsection

@section('scripts')


   
    
    
@endsection