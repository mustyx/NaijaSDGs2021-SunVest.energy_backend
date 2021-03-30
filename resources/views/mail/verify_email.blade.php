@extends('layout.email')
@section('content')
    <!-- START CENTERED WHITE CONTAINER -->
    <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">Please confirm your email</span>
    <table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;">

        <!-- START MAIN CONTENT AREA -->
        <tr>
            <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;">
                <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                    <tr>
                        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">
                            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Hi {{$firstname}},</p>
                            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Thank you for creating an account with us. <br>To proceed, please verify your email by clicking the button below.</p>
                            <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;">
                                <tbody>
                                <tr>
                                    <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">
                                            <tbody>
                                            <tr>
                                                <td style="font-family: sans-serif; font-size: 14px; vertical-align: top; background-color: #3498db; border-radius: 5px; text-align: center;"> <a href="{{$url}}" target="_blank" style="display: inline-block; color: #ffffff; background-color: #3498db; border: solid 1px #3498db; border-radius: 5px; box-sizing: border-box; cursor: pointer; text-decoration: none; font-size: 14px; font-weight: bold; margin: 0; padding: 12px 25px; text-transform: capitalize; border-color: #3498db;">VERIFY EMAIL</a> </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">If you're having trouble clicking the activation button, copy and paste the URL below into your web browser.<br><br>{!! $url !!}</p>
                            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">We are glad to have you on board.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- END MAIN CONTENT AREA -->
    </table>

    <!-- START FOOTER -->
    <div class="footer" style="clear: both; Margin-top: 10px; text-align: center; width: 100%;">
        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
            <tr>
                <td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">
                    <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">Sunvest Limited</span>
                    <br> Abuja, Nigeria.
                </td>
            </tr>
            <tr>
                <td class="content-block powered-by" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">
                    Powered by <a href="#" style="color: #999999; font-size: 12px; text-align: center; text-decoration: none;">Sunvest Tech</a>.
                </td>
            </tr>
        </table>
    </div>
    <!-- END FOOTER -->

    <!-- END CENTERED WHITE CONTAINER -->
@endsection
