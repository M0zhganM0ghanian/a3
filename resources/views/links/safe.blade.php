@extends('layouts.master')

@section('title')
    Keep Password safe
@endsection

@push('head')
@endpush

@section('headSec')
  <div class="jumbotron text-center">
    <h3>Keep your online accounts safe <span class="glyphicon glyphicon-warning-sign"></span></h3>
  </div>
@endsection

@section('content')

  <p>Do not let your Web browsers( FireFox, Chrome, Safari, Opera, IE ) store your passwords, since all passwords saved in Web browsers can be revealed easily.</p>
  <p>Do not log in to important accounts on the computers of others, or when connected to a public Wi-Fi hotspot, Tor, free VPN or web proxy.</p>
  <p>Do not send sensitive information online via unencrypted( e.g. HTTP or FTP ) connections, because messages in these connections can be sniffed with very little effort. You should use encrypted connections such as HTTPS, SFTP, FTPS, SMTPS, IPSec whenever possible.</p>
  <p>When travelling, you can encrypt your Internet connections before they leave your laptop, tablet, mobile phone or router. For example, you can set up a private VPN( with MS-CHAP v2 or stronger protocols ) on your own server( home computer, dedicated server or VPS ) and connect to it. Alternatively, you can set up an encrypted SSH tunnel between your router and your home computer( or a remote server of your own ) with PuTTY and connect your programs( e.g. FireFox ) to PuTTY. Then even if somebody captures your data as it is transmitted between your device( e.g. laptop, iPhone, iPad ) and your server with a packet sniffer, they'll won't be able to steal your data and passwords from the encrypted streaming data.</p>

@endsection
