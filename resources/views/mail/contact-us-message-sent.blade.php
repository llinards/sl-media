<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>New Contact Request - S&L Media SIA</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                color: #333;
                background-color: #f4f4f4;
            }

            .email-container {
                max-width: 600px;
                margin: 0 auto;
                background-color: #ffffff;
            }

            .header {
                background-color: #000000;
                color: #ffffff;
                padding: 20px;
                text-align: center;
            }

            .header img {
                max-height: 70px;
                margin-bottom: 15px;
            }

            .header h1 {
                margin: 0;
                font-size: 24px;
            }

            .content {
                padding: 20px;
            }

            .field-row {
                margin-bottom: 20px;
                border-bottom: 1px solid #eeeeee;
                padding-bottom: 15px;
            }

            .field-row:last-child {
                border-bottom: none;
                margin-bottom: 0;
                padding-bottom: 0;
            }

            .field-label {
                font-weight: bold;
                color: #000000;
                font-size: 14px;
                margin-bottom: 5px;
            }

            .field-value {
                color: #555555;
                font-size: 14px;
                word-wrap: break-word;
            }

            .footer {
                background-color: #f4f4f4;
                padding: 15px 20px;
                text-align: center;
                font-size: 12px;
                color: #666666;
                border-top: 1px solid #dddddd;
            }
        </style>
    </head>
    <body>
        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #f4f4f4">
            <tr>
                <td align="center" style="padding: 20px">
                    <table
                        width="600"
                        cellpadding="0"
                        cellspacing="0"
                        border="0"
                        class="email-container"
                        style="background-color: #ffffff"
                    >
                        <!-- Header with Logo -->
                        <tr>
                            <td
                                class="header"
                                style="background-color: #000000; color: #ffffff; padding: 20px; text-align: center"
                            >
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td align="center">
                                            <img
                                                src="{{ asset('logo-white.png') }}"
                                                alt="S&L Media SIA Logo"
                                                style="max-height: 70px; margin-bottom: 15px"
                                            />
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- Content -->
                        <tr>
                            <td class="content" style="padding: 20px">
                                <p style="margin: 0 0 20px 0; color: #555555">Hello,</p>
                                <p style="margin: 0 0 25px 0; color: #555555">
                                    You have received a new contact request from your website. Here are the details:
                                </p>

                                <!-- Fields Table -->
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <!-- Customer Name -->
                                    <tr>
                                        <td style="padding-bottom: 20px; border-bottom: 1px solid #eeeeee">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td
                                                        style="
                                                            font-weight: bold;
                                                            color: #000000;
                                                            font-size: 14px;
                                                            margin-bottom: 5px;
                                                        "
                                                    >
                                                        Your Name
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: #555555; font-size: 14px; padding-top: 5px">
                                                        {{ $data['customer_name'] }}
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <!-- Company Name -->
                                    <tr>
                                        <td style="padding: 15px 0 20px 0; border-bottom: 1px solid #eeeeee">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td
                                                        style="
                                                            font-weight: bold;
                                                            color: #000000;
                                                            font-size: 14px;
                                                            margin-bottom: 5px;
                                                        "
                                                    >
                                                        Company Name
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: #555555; font-size: 14px; padding-top: 5px">
                                                        {{ $data['company_name'] ?: 'Not provided' }}
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <!-- Email -->
                                    <tr>
                                        <td style="padding: 15px 0 20px 0; border-bottom: 1px solid #eeeeee">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td
                                                        style="
                                                            font-weight: bold;
                                                            color: #000000;
                                                            font-size: 14px;
                                                            margin-bottom: 5px;
                                                        "
                                                    >
                                                        Email Address
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: #555555; font-size: 14px; padding-top: 5px">
                                                        <a
                                                            href="mailto:{{ $data['email'] }}"
                                                            style="color: #0066cc; text-decoration: none"
                                                        >
                                                            {{ $data['email'] }}
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <!-- Phone -->
                                    <tr>
                                        <td style="padding: 15px 0 20px 0; border-bottom: 1px solid #eeeeee">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td
                                                        style="
                                                            font-weight: bold;
                                                            color: #000000;
                                                            font-size: 14px;
                                                            margin-bottom: 5px;
                                                        "
                                                    >
                                                        Phone Number
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: #555555; font-size: 14px; padding-top: 5px">
                                                        {{ $data['phone'] ?: 'Not provided' }}
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <!-- Question/Message -->
                                    <tr>
                                        <td style="padding: 15px 0 20px 0; border-bottom: 1px solid #eeeeee">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td
                                                        style="
                                                            font-weight: bold;
                                                            color: #000000;
                                                            font-size: 14px;
                                                            margin-bottom: 5px;
                                                        "
                                                    >
                                                        Question
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="
                                                            color: #555555;
                                                            font-size: 14px;
                                                            padding-top: 5px;
                                                            line-height: 1.6;
                                                            white-space: pre-wrap;
                                                        "
                                                    >
                                                        {{ $data['question'] }}
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <!-- Newsletter Opt-in -->
                                    <tr>
                                        <td style="padding: 15px 0 0 0">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td
                                                        style="
                                                            font-weight: bold;
                                                            color: #000000;
                                                            font-size: 14px;
                                                            margin-bottom: 5px;
                                                        "
                                                    >
                                                        Newsletter Subscription
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: #555555; font-size: 14px; padding-top: 5px">
                                                        @if ($data['newsletter'])
                                                            <span style="color: #008000; font-weight: bold">
                                                                ✓ Subscribed
                                                            </span>
                                                        @else
                                                            <span style="color: #999999">Not subscribed</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- Footer -->
                        <tr>
                            <td
                                class="footer"
                                style="
                                    background-color: #f4f4f4;
                                    padding: 15px 20px;
                                    text-align: center;
                                    font-size: 12px;
                                    color: #666666;
                                    border-top: 1px solid #dddddd;
                                "
                            >
                                <p style="margin: 0 0 8px 0">
                                    This is an automated email. Please do not reply to this address.
                                </p>
                                <p style="margin: 0">© 2025 S&L Media SIA. All rights reserved.</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
