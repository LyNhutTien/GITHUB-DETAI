<!DOCTYPE html>

<head>
     <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ĐỀ_TÀI_1</title>
    <link href="http://kbtt.catphcm.bocongan.gov.vn/hochieu/Styles/bootstrap.min.css" rel="stylesheet" />
    <link href="http://kbtt.catphcm.bocongan.gov.vn/hochieu/Styles/jquery-ui.css" rel="stylesheet" />

    <!--[if lt IE 9]>
      <script type="text/javascript""></script>
      <script type="text/javascript" src=""></script>
      <link href="" id="respond-proxy" rel="respond-proxy" />
      <link href="" id="respond-redirect" rel="respond-redirect" />
      <script src=""></script>
    <![endif]-->
      
       
     
</head>


<form method = "get" action = "" id = "form1">
    <div class = "aspNetHidden">
        <input type = "hidden" name = "__EVENTTARGET" id = "__EVENTTARGET" value = "" />
        <input type = "hidden" name = "__EVENTARGUMENT" id = "__EVENTARGUMENT" value = "" />
        <input type = "hidden" name = "__VIEWSTATE" id = "__VIEWSTATE" value = "/wEPDwULLTE0MDYyMjA4NTAPZBYCZg9kFgICAQ9kFgICAw9kFgICAQ9kFgJmD2QWAmYPZBYiAgEPDxYCHgRUZXh0BVo8Qj5OSOG6rFAgVOG7nCBLSEFJIEPhuqRQLCBT4busQSDEkOG7lEkgSOG7kiBTxqAgSOG7mCBDSEnhur5VIChU4bucIEtIQUkgxJBJ4buGTiBU4busKTwvQj5kZAIFDxAPFgYeDkRhdGFWYWx1ZUZpZWxkBQpHaW9pVGluaElkHg1EYXRhVGV4dEZpZWxkBQxHaW9pVGluaE5hbWUeC18hRGF0YUJvdW5kZ2QQFQMMLS0tQ2jhu41uLS0tA05hbQRO4buvFQMAATEBMBQrAwNnZ2dkZAIJDxAPFgIfA2dkEBVSDC0tLUNo4buNbi0tLQQxOTgwBDE5NzkEMTk3OAQxOTc3BDE5NzYEMTk3NQQxOTc0BDE5NzMEMTk3MgQxOTcxBDE5NzAEMTk2OQQxOTY4BDE5NjcEMTk2NgQxOTY1BDE5NjQEMTk2MwQxOTYyBDE5NjEEMTk2MAQxOTU5BDE5NTgEMTk1NwQxOTU2BDE5NTUEMTk1NAQxOTUzBDE5NTIEMTk1MQQxOTUwBDE5NDkEMTk0OAQxOTQ3BDE5NDYEMTk0NQQxOTQ0BDE5NDMEMTk0MgQxOTQxBDE5NDAEMTkzOQQxOTM4BDE5MzcEMTkzNgQxOTM1BDE5MzQEMTkzMwQxOTMyBDE5MzEEMTkzMAQxOTI5BDE5MjgEMTkyNwQxOTI2BDE5MjUEMTkyNAQxOTIzBDE5MjIEMTkyMQQxOTIwBDE5MTkEMTkxOAQxOTE3BDE5MTYEMTkxNQQxOTE0BDE5MTMEMTkxMgQxOTExBDE5MTAEMTkwOQQxOTA4BDE5MDcEMTkwNgQxOTA1BDE5MDQEMTkwMwQxOTAyBDE5MDEEMTkwMBVSATAEMTk4MAQxOTc5BDE5NzgEMTk3NwQxOTc2BDE5NzUEMTk3NAQxOTczBDE5NzIEMTk3MQQxOTcwBDE5NjkEMTk2OAQxOTY3BDE5NjYEMTk2NQQxOTY0BDE5NjMEMTk2MgQxOTYxBDE5NjAEMTk1OQQxOTU4BDE5NTcEMTk1NgQxOTU1BDE5NTQEMTk1MwQxOTUyBDE5NTEEMTk1MAQxOTQ5BDE5NDgEMTk0NwQxOTQ2BDE5NDUEMTk0NAQxOTQzBDE5NDIEMTk0MQQxOTQwBDE5MzkEMTkzOAQxOTM3BDE5MzYEMTkzNQQxOTM0BDE5MzMEMTkzMgQxOTMxBDE5MzAEMTkyOQQxOTI4BDE5MjcEMTkyNgQxOTI1BDE5MjQEMTkyMwQxOTIyBDE5MjEEMTkyMAQxOTE5BDE5MTgEMTkxNwQxOTE2BDE5MTUEMTkxNAQxOTEzBDE5MTIEMTkxMQQxOTEwBDE5MDkEMTkwOAQxOTA3BDE5MDYEMTkwNQQxOTA0BDE5MDMEMTkwMgQxOTAxBDE5MDAUKwNSZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2RkAgsPEA8WBh8BBQtDb3VudHJ5Q29kZR8CBQtDb3VudHJ5TmFtZR8DZ2QQFf8BDC0tLUNo4buNbi0tLQ1WaeG7h3QgDQ0KTmFtB0JhaHJhaW4KQmFuZ2xhZGVzaAhCYXJiYWRvcwtBZmdoYW5pc3RhbgdCZWxhcnVzB0JlbGdpdW0GQmVsaXplBUJlbmluB0Jlcm11ZGEHQWxiYW5pYQZCaHV0YW4HQWxnZXJpYQ5BbWVyaWNhbiBTYW1vYQdBbmRvcnJhBkFuZ29sYQhBbmd1aWxsYQpBbnRhcmN0aWNhE0FudGlndWEgYW5kIEJhcmJ1ZGEJQXJnZW50aW5hB0FybWVuaWEFQXJ1YmEJQXVzdHJhbGlhB0F1c3RyaWEKQXplcmJhaWphbgdCYWhhbWFzB0JvbGl2aWEWQm9zbmlhIGFuZCBIZXJ6ZWdvdmluYQhCb3Rzd2FuYQ1Cb3V2ZXQgSXNsYW5kBkJyYXppbB1Ccml0aXNoIEluZGlhIE9jZWFuIFRlcnJpdG9yeRFCcnVuZWkgRGFydXNzYWxhbQhCdWxnYXJpYQxCdXJraW5hIEZhc28HQnVydW5kaQhDYW1ib2RpYQhDYW1lcm9vbgZDYW5hZGENQ2FwZSANDQpWZXJkZQ5DYXltYW4gSXNsYW5kcxhDZW50cmFsIEFmcmljYW4gUmVwdWJsaWMEQ2hhZAVDaGlsZQVDaGluYRBDaHJpc3RtYXMgSXNsYW5kG0NvY29zIA0NCihLZWVsaW5nICkgSXNsYW5kcwhDb2xvbWJpYQdDb21vcm9zBUNvbmdvD0Nvb2sgDQ0KSXNsYW5kcw1Db3N0YSANDQpSaWNhEUNvdGUgDQ0KZCcgSXZvaXJlB0Nyb2F0aWEGQ3lwcnVzEUN6ZWNoIA0NClJlcHVibGljIEtvcmVhIA0NCkRlbW9jcmF0aWMgUGVvcGxlcyBSZXB1B0Rlbm1hcmsIRGppYm91dGkIRG9taW5pY2ESRG9taW5pY2FuIFJlcHVibGljDUVhc3QgDQ0KVGltb3IHRWN1YWRvcgVFZ3lwdA1FbCANDQpTYWx2YWRvEUVxdWF0b3JpYWwgR3VpbmVhB0VyaXRyZWEHRXN0b25pYQhFdGhpb3BpYRtGYWxrbGFuZCBJc2xhbmRzIChNYWx2aW5hcykFRmFyb2UERmlqaQdGaW5sYW5kBkZyYW5jZRNGcmFuY2UgTWV0cm9wb2xpdGFuDUZyZW5jaCBHdWlhbmEQRnJlbmNoIFBvbHluZXNpYRtGcmVuY2ggU291dGhlcm4gVGVycml0b3JpZXMFR2Fib24GR2FtYmlhB0dlb3JnaWEHR2VybWFueQVHaGFuYQlHaWJyYWx0YXIGR3JlZWNlCUdyZWVubGFuZAdHcmVuYWRhCkd1YWRlbG91cGUER3VhbQlHdWF0ZW1hbGEGR3VpbmVhDUd1aW5lYS1CaXNzYXUGR3V5YW5hBUhhaXRpHUhlYXJkIA0NCmFuZCBNY0RvbmFsZCBJc2xhbmRzCkhpZ2h0dm9sdGEfSG9seSANDQpTZWUgKFZhdGljYW4gQ2l0eSBTdGF0ZQhIb25kdXJhcwxIb25nIA0NCktvbmcHSHVuZ2FyeQdJY2VsYW5kBUluZGlhCUluZG9uZXNpYRtJcmFuIA0NCklsYXNtaWMgUmVwdWJsaWMgb2YESXJhcQdJcmVsYW5kBklzcmFlbAVJdGFseQdKYW1haWNhBUphcGFuBkpvcmRhbgpLYXpha2hzdGFuBUtlbnlhCEtpcmliYXRpBkt1d2FpdApLeXJneXpzdGFuIExhbyANDQpQZW9wbGVzIERlbW9jcmF0aWMgUmVwdWJsBkxhdHZpYQdMZWJhbm9uB0xlc290aG8HTGliZXJpYRZMaWJ5YW4gQXJhYiBKYW1haGlyaXlhDUxpZWNodGVuc3RlaW4JTGl0aHVhbmlhCkx1eGVtYm91cmcFTWFjYXULTWFkYWdhY3NjYXIGTWFsYXdpCE1hbGF5c2lhCE1hbGRpdmVzBE1hbGkFTWFsdGEQTWFyc2hhbGwgSXNsYW5kcwpNYXJ0aW5pcXVlCk1hdXJpdGFuaWEJTWF1cml0aXVzB01heW90dGUGTWV4aWNvHU1pY3JvbmVzaWEgRmVkZXJhdGVkIFN0YXRlcyBvBk1vbmFjbwhNb25nb2xpYQpNb250ZW5lZ3JvCk1vbnRzZXJyYXQHTW9sZG92YQdNb3JvY2NvCk1vemFtYmlxdWUHTXlhbm1hcgdOYW1pYmlhBU5hdXJ1BU5lcGFsGk5ldGhlcmxhbmRzIEtpbmdkb20gb2YgdGhlFE5ldGhlcmxhbmRzIEFudGlsbGVzDE5ldXRyYWwgWm9uZQ5OZXcgDQ0KWmVhbGFuZAlOaWNhcmFndWEFTmlnZXIQTmV3IA0NCkNhbGVkb25pYQdOaWdlcmlhBE5pdWUOTm9yZ29sayBJc2xhbmQXTm90aGVybiBNYXJpYW5hIElzbGFuZHMGTm9yd2F5BE9tYW4JUGFsZXN0aW5lCFBha2lzdGFuBVBhbGF1BlBhbmFtYRBQYXB1YSBOZXcgR3VpbmVhB1BhcmFnYXkEUGVydQtQaGlsaXBwaW5lcwhQaXRjYWlybgZQb2xhbmQJUG9seW5lc2lhB1BvcnR1Z2ELUHVlcnRvIFJpY28FUWF0YXIRS29yZWEgUmVwdWJsaWMgb2YHUmV1bmlvbgdSb21hbmlhElJ1c3NpYW4gRmVkZXJhdGlvbgZSd2FuZGEIU2FoYXJhd2kJU3QuSGVsZW5hFVNhaW50IEtpdHRzIGFuZCBOZXZpcwtTYWludCBMdWNpYRZTdC5QaWVycmUgYW5kIE1pcXVlbG9uHVNhaW50IFZpbmNlbnQgYW5kIHRoZSBHcmVuYWRpBVNhbW9hDVNhbiANDQpNYXJpbm8KU2FudGFsdWNpYRhTYW8gDQ0KVG9tZSBhbmQgUHJpbmNpcGUMU2F1ZGkgQXJhYmlhCFNjb3RsYW5kB1NlbmVnYWwGU2VyYmlhClNleWNoZWxsZXMMU2llcnJhIExlb25lCVNpbmdhcG9yZQhTbG92YWtpYQlTbG92ZWluaWEPU29sb21vbiBJc2xhbmRzB1NvbWFsaWEMU291dGggQWZyaWNhHVNvdXRoIEdlb3JnaWEgYW5kIHRoZSBTb3V0aCBTBVNwYWluDFNyaSANDQpMYW5rYQVTdWRhbghTdXJpbmFtZRxTdmFsYmQgYW5kIEphbiBNYXllbiBJc2xhbmRzCVN3YXppbGFuZAZTd2VkZW4LU3dpdHplcmxhbmQUU3lyaWFuIEFyYWIgUmVwdWJsaWMbVGFuemFuaWEgVW5pdGVkIFJlcHVibGljIG9mGFRhaXdhbiBQcm92aW5jZSBvZiBDaGluYQpUYWppa2lzdGFuCFRoYWlsYW5kHU1hY2Vkb25pYSBUaGUgZm9ybWVyIFl1Z29zbGF2BFRvZ28HVG9rZWxhdQVUb25nYRNUcmluaWRhZCBhbmQgVG9iYWdvB1R1bmlzaWEGVHVya2V5DFR1cmttZW5pc3RhbhhUdXJrcyBhbmQgQ2FpY29zIElzbGFuZHMGVHV2YWx1BlVnYW5kYQdVa3JhaW5lFFVuaXRlZCBBcmFiIEVtaXJhdGVzHVVuaXRlZCBLaW5nZG9tIEJyaXRpc2ggQ2l0aXplHVVuaXRlZCBLaW5nZG9tIEJyaXRpc2ggRGVwZW5kHVVuaXRlZCBLaW5nZG9tIEJyaXRpc2ggTmF0aW9uHVVuaXRlZCBLaW5nZG9tIEJyaXRpc2ggT3ZlcnNlHVVuaXRlZCBLaW5nZG9tIEJyaXRpc2ggUHJvdGVjHVVuaXRlZCBLaW5nZG9tIEJyaXRpc2ggU3ViamVjDVVuaXRlZCBTdGF0ZXMcVW5pdGVkIFN0YXRlcyBNaW5vciBPdXRseWluZwpVemJla2lzdGFuB1ZhbnVhdHUJVmVuZXp1ZWxhGFZpcmdpbiBJc2xhbmRzIChCcml0aXNoKRVWaXJnaW4gSXNsYW5kcyAoVS5TICkZV2FsbGlzIGFuZCBGdXR1bmEgSXNsYW5kcw5XZXN0ZXJuIFNhaGFyYQVZZW1lbgpZdWdvc2xhdmlhBVphaXJlBlphbWJpYQhaaW1iYWJ3ZRtVbml0ZWQgTmF0aW9ucyBPcmdhbml6YXRpb24EQ3ViYQxVbmlkZW50aWZpZWQV/wEAA1ZOTQNCSFIDQkdEA0JSQgNBRkcDQkxSA0JFTANCTFoDQkVOA0JNVQNBTEIDQlROA0RaQQNBU00DQU5EA0FHTwNBSUEDQVRBA0FURwNBUkcDQVJNA0FCVwNBVVMDQVVUA0FaRQNCSFMDQk9MA0JJ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MTk2OQQxOTY4BDE5NjcEMTk2NgQxOTY1BDE5NjQEMTk2MwQxOTYyBDE5NjEEMTk2MAQxOTU5BDE5NTgEMTk1NwQxOTU2BDE5NTUEMTk1NAQxOTUzBDE5NTIEMTk1MQQxOTUwBDE5NDkEMTk0OAQxOTQ3BDE5NDYEMTk0NQQxOTQ0BDE5NDMEMTk0MgQxOTQxBDE5NDAEMTkzOQQxOTM4BDE5MzcEMTkzNgQxOTM1BDE5MzQEMTkzMwQxOTMyBDE5MzEEMTkzMAQxOTI5BDE5MjgEMTkyNwQxOTI2BDE5MjUEMTkyNAQxOTIzBDE5MjIEMTkyMQQxOTIwBDE5MTkEMTkxOAQxOTE3BDE5MTYEMTkxNQQxOTE0BDE5MTMEMTkxMgQxOTExBDE5MTAEMTkwOQQxOTA4BDE5MDcEMTkwNgQxOTA1BDE5MDQEMTkwMwQxOTAyBDE5MDEEMTkwMAQxODk5BDE4OTgEMTg5NwQxODk2BDE4OTUEMTg5NAQxODkzBDE4OTIEMTg5MQQxODkwBDE4ODkEMTg4OAQxODg3BDE4ODYEMTg4NQQxODg0BDE4ODMEMTg4MgQxODgxBDE4ODAEMTg3OQQxODc4BDE4NzcEMTg3NgQxODc1BDE4NzQEMTg3MwQxODcyBDE4NzEEMTg3MAQxODY5BDE4NjgEMTg2NwQxODY2BDE4NjUEMTg2NAQxODYzBDE4NjIEMTg2MQQxODYwBDE4NTkEMTg1OAQxODU3BDE4NTYEMTg1NQQxODU0BDE4NTMEMTg1MgQxODUxBDE4NTAEMTg0OQQxODQ4BDE4NDcEMTg0NgQxODQ1BDE4NDQEMTg0MwQxODQyBDE4NDEEMTg0MAQxODM5BDE4MzgEMTgzNwQxODM2BDE4MzUEMTgzNAQxODMzBDE4MzIEMTgzMQQxODMwBDE4MjkEMTgyOAQxODI3BDE4MjYEMTgyNQQxODI0BDE4MjMEMTgyMgQxODIxBDE4MjAEMTgxOQQxODE4BDE4MTcEMTgxNgQxODE1BDE4MTQEMTgxMwQxODEyBDE4MTEEMTgxMAQxODA5BDE4MDgEMTgwNwQxODA2BDE4MDUEMTgwNAQxODAzBDE4MDIEMTgwMQQxODAwFbYBAAQxOTgwBDE5NzkEMTk3OAQxOTc3BDE5NzYEMTk3NQQxOTc0BDE5NzMEMTk3MgQxOTcxBDE5NzAEMTk2OQQxOTY4BDE5NjcEMTk2NgQxOTY1BDE5NjQEMTk2MwQxOTYyBDE5NjEEMTk2MAQxOTU5BDE5NTgEMTk1NwQxOTU2BDE5NTUEMTk1NAQxOTUzBDE5NTIEMTk1MQQxOTUwBDE5NDkEMTk0OAQxOTQ3BDE5NDYEMTk0NQQxOTQ0BDE5NDMEMTk0MgQxOTQxBDE5NDAEMTkzOQQxOTM4BDE5MzcEMTkzNgQxOTM1BDE5MzQEMTkzMwQxOTMyBDE5MzEEMTkzMAQxOTI5BDE5MjgEMTkyNwQxOTI2BDE5MjUEMTkyNAQxOTIzBDE5MjIEMTkyMQQxOTIwBDE5MTkEMTkxOAQxOTE3BDE5MTYEMTkxNQQxOTE0BDE5MTMEMTkxMgQxOTExBDE5MTAEMTkwOQQxOTA4BDE5MDcEMTkwNgQxOTA1BDE5MDQEMTkwMwQxOTAyBDE5MDEEMTkwMAQxODk5BDE4OTgEMTg5NwQxODk2BDE4OTUEMTg5NAQxODkzBDE4OTIEMTg5MQQxODkwBDE4ODkEMTg4OAQxODg3BDE4ODYEMTg4NQQxODg0BDE4ODMEMTg4MgQxODgxBDE4ODAEMTg3OQQxODc4BDE4NzcEMTg3NgQxODc1BDE4NzQEMTg3MwQxODcyBDE4NzEEMTg3MAQxODY5BDE4NjgEMTg2NwQxODY2BDE4NjUEMTg2NAQxODYzBDE4NjIEMTg2MQQxODYwBDE4NTkEMTg1OAQxODU3BDE4NTYEMTg1NQQxODU0BDE4NTMEMTg1MgQxODUxBDE4NTAEMTg0OQQxODQ4BDE4NDcEMTg0NgQxODQ1BDE4NDQEMTg0MwQxODQyBDE4NDEEMTg0MAQxODM5BDE4MzgEMTgzNwQxODM2BDE4MzUEMTgzNAQxODMzBDE4MzIEMTgzMQQxODMwBDE4MjkEMTgyOAQxODI3BDE4MjYEMTgyNQQxODI0BDE4MjMEMTgyMgQxODIxBDE4MjAEMTgxOQQxODE4BDE4MTcEMTgxNgQxODE1BDE4MTQEMTgxMwQxODEyBDE4MTEEMTgxMAQxODA5BDE4MDgEMTgwNwQxODA2BDE4MDUEMTgwNAQxODAzBDE4MDIEMTgwMQQxODAwFCsDtgFnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2RkAjsPEA8WAh8DZ2QQFbYBDC0tLUNo4buNbi0tLQQxOTgwBDE5NzkEMTk3OAQxOTc3BDE5NzYEMTk3NQQxOTc0BDE5NzMEMTk3MgQxOTcxBDE5NzAEMTk2OQQxOTY4BDE5NjcEMTk2NgQxOTY1BDE5NjQEMTk2MwQxOTYyBDE5NjEEMTk2MAQxOTU5BDE5NTgEMTk1NwQxOTU2BDE5NTUEMTk1NAQxOTUzBDE5NTIEMTk1MQQxOTUwBDE5NDkEMTk0OAQxOTQ3BDE5NDYEMTk0NQQxOTQ0BDE5NDMEMTk0MgQxOTQxBDE5NDAEMTkzOQQxOTM4BDE5MzcEMTkzNgQxOTM1BDE5MzQEMTkzMwQxOTMyBDE5MzEEMTkzMAQxOTI5BDE5MjgEMTkyNwQxOTI2BDE5MjUEMTkyNAQxOTIzBDE5MjIEMTkyMQQxOTIwBDE5MTkEMTkxOAQxOTE3BDE5MTYEMTkxNQQxOTE0BDE5MTMEMTkxMgQxOTExBDE5MTAEMTkwOQQxOTA4BDE5MDcEMTkwNgQxOTA1BDE5MDQEMTkwMwQxOTAyBDE5MDEEMTkwMAQxODk5BDE4OTgEMTg5NwQxODk2BDE4OTUEMTg5NAQxODkzBDE4OTIEMTg5MQQxODkwBDE4ODkEMTg4OAQxODg3BDE4ODYEMTg4NQQxODg0BDE4ODMEMTg4MgQxODgxBDE4ODAEMTg3OQQxODc4BDE4NzcEMTg3NgQxODc1BDE4NzQEMTg3MwQxODcyBDE4NzEEMTg3MAQxODY5BDE4NjgEMTg2NwQxODY2BDE4NjUEMTg2NAQxODYzBDE4NjIEMTg2MQQxODYwBDE4NTkEMTg1OAQxODU3BDE4NTYEMTg1NQQxODU0BDE4NTMEMTg1MgQxODUxBDE4NTAEMTg0OQQxODQ4BDE4NDcEMTg0NgQxODQ1BDE4NDQEMTg0MwQxODQyBDE4NDEEMTg0MAQxODM5BDE4MzgEMTgzNwQxODM2BDE4MzUEMTgzNAQxODMzBDE4MzIEMTgzMQQxODMwBDE4MjkEMTgyOAQxODI3BDE4MjYEMTgyNQQxODI0BDE4MjMEMTgyMgQxODIxBDE4MjAEMTgxOQQxODE4BDE4MTcEMTgxNgQxODE1BDE4MTQEMTgxMwQxODEyBDE4MTEEMTgxMAQxODA5BDE4MDgEMTgwNwQxODA2BDE4MDUEMTgwNAQxODAzBDE4MDIEMTgwMQQxODAwFbYBAAQxOTgwBDE5NzkEMTk3OAQxOTc3BDE5NzYEMTk3NQQxOTc0BDE5NzMEMTk3MgQxOTcxBDE5NzAEMTk2OQQxOTY4BDE5NjcEMTk2NgQxOTY1BDE5NjQEMTk2MwQxOTYyBDE5NjEEMTk2MAQxOTU5BDE5NTgEMTk1NwQxOTU2BDE5NTUEMTk1NAQxOTUzBDE5NTIEMTk1MQQxOTUwBDE5NDkEMTk0OAQxOTQ3BDE5NDYEMTk0NQQxOTQ0BDE5NDMEMTk0MgQxOTQxBDE5NDAEMTkzOQQxOTM4BDE5MzcEMTkzNgQxOTM1BDE5MzQEMTkzMwQxOTMyBDE5MzEEMTkzMAQxOTI5BDE5MjgEMTkyNwQxOTI2BDE5MjUEMTkyNAQxOTIzBDE5MjIEMTkyMQQxOTIwBDE5MTkEMTkxOAQxOTE3BDE5MTYEMTkxNQQxOTE0BDE5MTMEMTkxMgQxOTExBDE5MTAEMTkwOQQxOTA4BDE5MDcEMTkwNgQxOTA1BDE5MDQEMTkwMwQxOTAyBDE5MDEEMTkwMAQxODk5BDE4OTgEMTg5NwQxODk2BDE4OTUEMTg5NAQxODkzBDE4OTIEMTg5MQQxODkwBDE4ODkEMTg4OAQxODg3BDE4ODYEMTg4NQQxODg0BDE4ODMEMTg4MgQxODgxBDE4ODAEMTg3OQQxODc4BDE4NzcEMTg3NgQxODc1BDE4NzQEMTg3MwQxODcyBDE4NzEEMTg3MAQxODY5BDE4NjgEMTg2NwQxODY2BDE4NjUEMTg2NAQxODYzBDE4NjIEMTg2MQQxODYwBDE4NTkEMTg1OAQxODU3BDE4NTYEMTg1NQQxODU0BDE4NTMEMTg1MgQxODUxBDE4NTAEMTg0OQQxODQ4BDE4NDcEMTg0NgQxODQ1BDE4NDQEMTg0MwQxODQyBDE4NDEEMTg0MAQxODM5BDE4MzgEMTgzNwQxODM2BDE4MzUEMTgzNAQxODMzBDE4MzIEMTgzMQQxODMwBDE4MjkEMTgyOAQxODI3BDE4MjYEMTgyNQQxODI0BDE4MjMEMTgyMgQxODIxBDE4MjAEMTgxOQQxODE4BDE4MTcEMTgxNgQxODE1BDE4MTQEMTgxMwQxODEyBDE4MTEEMTgxMAQxODA5BDE4MDgEMTgwNwQxODA2BDE4MDUEMTgwNAQxODAzBDE4MDIEMTgwMQQxODAwFCsDtgFnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2RkAkEPEA8WAh8DZ2QQFbYBDC0tLUNo4buNbi0tLQQxOTgwBDE5NzkEMTk3OAQxOTc3BDE5NzYEMTk3NQQxOTc0BDE5NzMEMTk3MgQxOTcxBDE5NzAEMTk2OQQxOTY4BDE5NjcEMTk2NgQxOTY1BDE5NjQEMTk2MwQxOTYyBDE5NjEEMTk2MAQxOTU5BDE5NTgEMTk1NwQxOTU2BDE5NTUEMTk1NAQxOTUzBDE5NTIEMTk1MQQxOTUwBDE5NDkEMTk0OAQxOTQ3BDE5NDYEMTk0NQQxOTQ0BDE5NDMEMTk0MgQxOTQxBDE5NDAEMTkzOQQxOTM4BDE5MzcEMTkzNgQxOTM1BDE5MzQEMTkzMwQxOTMyBDE5MzEEMTkzMAQxOTI5BDE5MjgEMTkyNwQxOTI2BDE5MjUEMTkyNAQxOTIzBDE5MjIEMTkyMQQxOTIwBDE5MTkEMTkxOAQxOTE3BDE5MTYEMTkxNQQxOTE0BDE5MTMEMTkxMgQxOTExBDE5MTAEMTkwOQQxOTA4BDE5MDcEMTkwNgQxOTA1BDE5MDQEMTkwMwQxOTAyBDE5MDEEMTkwMAQxODk5BDE4OTgEMTg5NwQxODk2BDE4OTUEMTg5NAQxODkzBDE4OTIEMTg5MQQxODkwBDE4ODkEMTg4OAQxODg3BDE4ODYEMTg4NQQxODg0BDE4ODMEMTg4MgQxODgxBDE4ODAEMTg3OQQxODc4BDE4NzcEMTg3NgQxODc1BDE4NzQEMTg3MwQxODcyBDE4NzEEMTg3MAQxODY5BDE4NjgEMTg2NwQxODY2BDE4NjUEMTg2NAQxODYzBDE4NjIEMTg2MQQxODYwBDE4NTkEMTg1OAQxODU3BDE4NTYEMTg1NQQxODU0BDE4NTMEMTg1MgQxODUxBDE4NTAEMTg0OQQxODQ4BDE4NDcEMTg0NgQxODQ1BDE4NDQEMTg0MwQxODQyBDE4NDEEMTg0MAQxODM5BDE4MzgEMTgzNwQxODM2BDE4MzUEMTgzNAQxODMzBDE4MzIEMTgzMQQxODMwBDE4MjkEMTgyOAQxODI3BDE4MjYEMTgyNQQxODI0BDE4MjMEMTgyMgQxODIxBDE4MjAEMTgxOQQxODE4BDE4MTcEMTgxNgQxODE1BDE4MTQEMTgxMwQxODEyBDE4MTEEMTgxMAQxODA5BDE4MDgEMTgwNwQxODA2BDE4MDUEMTgwNAQxODAzBDE4MDIEMTgwMQQxODAwFbYBAAQxOTgwBDE5NzkEMTk3OAQxOTc3BDE5NzYEMTk3NQQxOTc0BDE5NzMEMTk3MgQxOTcxBDE5NzAEMTk2OQQxOTY4BDE5NjcEMTk2NgQxOTY1BDE5NjQEMTk2MwQxOTYyBDE5NjEEMTk2MAQxOTU5BDE5NTgEMTk1NwQxOTU2BDE5NTUEMTk1NAQxOTUzBDE5NTIEMTk1MQQxOTUwBDE5NDkEMTk0OAQxOTQ3BDE5NDYEMTk0NQQxOTQ0BDE5NDMEMTk0MgQxOTQxBDE5NDAEMTkzOQQxOTM4BDE5MzcEMTkzNgQxOTM1BDE5MzQEMTkzMwQxOTMyBDE5MzEEMTkzMAQxOTI5BDE5MjgEMTkyNwQxOTI2BDE5MjUEMTkyNAQxOTIzBDE5MjIEMTkyMQQxOTIwBDE5MTkEMTkxOAQxOTE3BDE5MTYEMTkxNQQxOTE0BDE5MTMEMTkxMgQxOTExBDE5MTAEMTkwOQQxOTA4BDE5MDcEMTkwNgQxOTA1BDE5MDQEMTkwMwQxOTAyBDE5MDEEMTkwMAQxODk5BDE4OTgEMTg5NwQxODk2BDE4OTUEMTg5NAQxODkzBDE4OTIEMTg5MQQxODkwBDE4ODkEMTg4OAQxODg3BDE4ODYEMTg4NQQxODg0BDE4ODMEMTg4MgQxODgxBDE4ODAEMTg3OQQxODc4BDE4NzcEMTg3NgQxODc1BDE4NzQEMTg3MwQxODcyBDE4NzEEMTg3MAQxODY5BDE4NjgEMTg2NwQxODY2BDE4NjUEMTg2NAQxODYzBDE4NjIEMTg2MQQxODYwBDE4NTkEMTg1OAQxODU3BDE4NTYEMTg1NQQxODU0BDE4NTMEMTg1MgQxODUxBDE4NTAEMTg0OQQxODQ4BDE4NDcEMTg0NgQxODQ1BDE4NDQEMTg0MwQxODQyBDE4NDEEMTg0MAQxODM5BDE4MzgEMTgzNwQxODM2BDE4MzUEMTgzNAQxODMzBDE4MzIEMTgzMQQxODMwBDE4MjkEMTgyOAQxODI3BDE4MjYEMTgyNQQxODI0BDE4MjMEMTgyMgQxODIxBDE4MjAEMTgxOQQxODE4BDE4MTcEMTgxNgQxODE1BDE4MTQEMTgxMwQxODEyBDE4MTEEMTgxMAQxODA5BDE4MDgEMTgwNwQxODA2BDE4MDUEMTgwNAQxODAzBDE4MDIEMTgwMQQxODAwFCsDtgFnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2RkAkMPEA8WBh8BBQdOb2lEdW5nHwIFB05vaUR1bmcfA2dkEBUJDC0tLUNo4buNbi0tLSzEkOG7gSBuZ2jhu4sgY+G6pXAgaOG7mSBjaGnhur91IGzhuqduIMSR4bqndSXEkOG7gSBuZ2jhu4sgY+G6pXAgbOG6oWkgaOG7mSBjaGnhur91NMSQ4buBIG5naOG7iyDEkWnhu4F1IGNo4buJbmggdGjDtG5nIHRpbiBo4buZIGNoaeG6v3VGxJDhu4Egbmdo4buLIGLhu5Ugc3VuZyBjb24gZMaw4bubaSA5IHR14buVaSB2w6BvIGjhu5kgY2hp4bq/dSBjaGEvbeG6uS/EkOG7gSBuZ2jhu4sgc+G7rWEgbsahaSBzaW5oIHRyb25nIGjhu5kgY2hp4bq/dRLEkOG7gSBuZ2jhu4sga2jDoWMSVMOhY2ggaOG7mSBjaGnhur91IEPhuqVwIGzhuqFpIGjhu5kgY2hp4bq/dSBkbyBtw6J0FQkALMSQ4buBIG5naOG7iyBj4bqlcCBo4buZIGNoaeG6v3UgbOG6p24gxJHhuqd1JcSQ4buBIG5naOG7iyBj4bqlcCBs4bqhaSBo4buZIGNoaeG6v3U0xJDhu4Egbmdo4buLIMSRaeG7gXUgY2jhu4luaCB0aMO0bmcgdGluIGjhu5kgY2hp4bq/dUbEkOG7gSBuZ2jhu4sgYuG7lSBzdW5nIGNvbiBkxrDhu5tpIDkgdHXhu5VpIHbDoG8gaOG7mSBjaGnhur91IGNoYS9t4bq5L8SQ4buBIG5naOG7iyBz4butYSBuxqFpIHNpbmggdHJvbmcgaOG7mSBjaGnhur91EsSQ4buBIG5naOG7iyBraMOhYxJUw6FjaCBo4buZIGNoaeG6v3UgQ+G6pXAgbOG6oWkgaOG7mSBjaGnhur91IGRvIG3DonQUKwMJZ2dnZ2dnZ2dnZGRkrFPv6Y+KbRbh+dgl6QbqIElsjD6RLh2yt2DuXxBHM9s=" />
    </div>

    <script type = "text/javascript">
//<![CDATA[
        var theForm = document.forms['form1'];
        if (!theForm) {
            theForm = document.form1;
        }
        function __doPostBack(eventTarget, eventArgument) {
            if (!theForm.onsubmit || (theForm.onsubmit() !== false)) {
                theForm.__EVENTTARGET.value = eventTarget;
                theForm.__EVENTARGUMENT.value = eventArgument;
                theForm.submit();
            }
        }
//]]>
    </script>


    <script src="/hochieu/WebResource.axd?d=Y0UafVkmOT-F-oWCMw52No8XlkkvRXGvwBx8cHpFBzJq3dHUFaEo0phTJm5ICZfGhqsgXEnFzD5mHr9mSnp6jL35I7eU6q5c_ZVPhZrMnlQ1&amp;t=635117173265614829" type="text/javascript"></script>


    <script src="/hochieu/ScriptResource.axd?d=s8INkISG36RD3qMO-QkX1WE2zgoahLeyMUEhTn4n75hb7pkAoKg7YiKjyBF3bEudosAhw2rP14CNYmNYdnQdPf_xZlL5SvUzufJTOJ9Pl4GdLXGA51LQGxx0yj63ZqsVaML1OXO-SGEvE-FXBMUzlWk74E4F7UUD8eXc84qtJSBOflsMmIcwuNvARxApO52P0&amp;t=26dfbc01" type="text/javascript"></script>
    <script type="text/javascript">
        //<![CDATA[
        if (typeof (Sys) === 'undefined')
            throw new Error('ASP.NET Ajax client-side framework failed to load.');
        //]]>
    </script>

    <script src="/hochieu/ScriptResource.axd?d=k9XIrjNOfwcoPE4pjtGWwP0_OKpxQV4sjUL1_30tk7rE28hBKexKFDsAksblkBqF6FGQOsHZV4s327KiRjYYa_K9HvMZ8AL8swgeFPPdy0UQT4OVTqsT1EV8swzuTgCGuloPP57JeXE9SHcqGKw7KfYH6A41msljDOI9OkQ4j2kX-ES4kzPgcp8DIrvgpAMB0&amp;t=26dfbc01" type="text/javascript"></script>
    <script type="text/javascript">
        //<![CDATA[
        Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', 'form1', ['tctl00$Content$Create1$UpdatePanel1', 'Content_Create1_UpdatePanel1'], [], [], 90, 'ctl00');
        //]]>
    </script>

    <div class="navbar navbar-inverse ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="http://kbtt.catphcm.bocongan.gov.vn/hochieu/images/logo.png" style="display: inline-block;">

                </a>

            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <!-- link gốc-->
                    <li><a asp-area="" asp-controller="Home"  >Admin</a></li>
                    <li><a asp-area="" asp-controller="Home"  >Trang chủ</a></li> 
                    <li><a asp-area="" asp-controller="Home"  >Giới thiệu</a></li>
                    <li><a asp-area="" asp-controller="Home"  >Liên hệ</a></li>
                </ul>

            </div>
        </div>
    </div>



    <div class="container body-content">




        <script type="text/javascript">

            function ajaxJquery() {
                $(function () {

                    //set quan huyen phuong xa edit

                    if ($('#Content_Create1_hidID').val() !== "0") {
                        var $options1 = $("#Content_Create1_ddlDiaChiThuongTruQuanHuyen  > option").clone();
                        $("#selectDiaChiThuongTruQuanHuyen").append($options1);
                        var $options2 = $("#Content_Create1_ddlDiaChiThuongTruPhuongXa  > option").clone();
                        $("#selectDiaChiThuongTruPhuongXa").append($options2);
                        var $options3 = $("#Content_Create1_ddlDiaChiTamTruQuanHuyen  > option").clone();
                        $("#selectDiaChiTamTruQuanHuyen").append($options3);
                        var $options4 = $("#Content_Create1_ddlDaiChiTamTruPhuongXa  > option").clone();
                        $("#selectDaiChiTamTruPhuongXa").append($options4);
                    } else {
                        var $options3 = $("#Content_Create1_ddlDiaChiTamTruQuanHuyen  > option").clone();
                        $("#selectDiaChiTamTruQuanHuyen").append($options3);
                    }

                    $(".Date").datepicker({dateFormat: 'dd/mm/yy', maxDate: new Date, minDate: new Date(1930, 01, 01)});
                    var cmnd = new Date();
                    cmnd.setMonth(cmnd.getMonth() - 168);

                    $(".NgayCapCMND").datepicker({dateFormat: 'dd/mm/yy', maxDate: new Date, minDate: new Date(1930, 01, 01)});

                    //$('.Date').datepicker();
                    $(".Date").each(function () {
                        $(this).attr("placeholder", "ngày/tháng/năm");
                    });
                    $(".NgayCapCMND").attr("placeholder", "ngày/tháng/năm");
                    $('#Content_Create1_ddlQuocGiaNoiSinh').change(function () {
                        if ($(this).val() !== "VNM") {
                            $('#Content_Create1_ddlNoiSinhId').attr("disabled", true);
                            $('#Content_Create1_ddlNoiSinhId').val("");

                        } else {
                            $('#Content_Create1_ddlNoiSinhId').attr("disabled", false);

                        }
                    });

                    $("#Content_Create1_txtNgaysinh").blur(function () {
                        if ($(this).length !== "") {
                            setTimeout(function () {
                                EnableNgayCapCMND();
                            }, 500);
                        }
                    });

                    $('#Content_Create1_ddlGioiTinh').change(function () {

                        if ($(this).val() === "1") {
                            $("#HoTenVo").html("Họ tên Vợ:");
                        }
                        if ($(this).val() === "0") {
                            $("#HoTenVo").html("Họ tên Chồng:");
                        }
                    });

                    $('#Content_Create1_ddlNoiDungDeNgheId').change(function () {
                        $('#Content_Create1_txtDeNghi').val($(this).val());
                        if ($(this).val() === "Đề nghị cấp hộ chiếu lần đầu") {
                            $(".SoHoHieuCu input").each(function () {
                                $(this).attr("disabled", true);
                                $(this).val("");
                            });
                        } else {
                            $(".SoHoHieuCu input").each(function () {
                                $(this).attr("disabled", false);
                            });
                        }

                        if ($(this).val() === "Đề nghị khác") {
                            $('#Content_Create1_txtNoiDungDeNghiKhac').attr("style", "display:inline");
                        } else {
                            $('#Content_Create1_txtNoiDungDeNghiKhac').val("");
                            $('#Content_Create1_txtNoiDungDeNghiKhac').attr("style", "display:none");
                        }

                    });

                    $("#Nam").click(function () {
                        if ($(this).is(':checked')) {
                            $(".NgaySinh").attr("placeholder", "năm");
                            $(".NgaySinh").attr('style', "display:none");
                            $('#Content_Create1_ddlNamSinh').attr('style', "display:inline");
                        } else {
                            $(".NgaySinh").attr("placeholder", "ngày/tháng/năm");
                            $('#Content_Create1_ddlNamSinh').attr('style', "display:none");
                            $(".NgaySinh").attr('style', "display:inline");
                        }
                    });

                    $(".ChiCoNamSinh").click(function () {
                        if ($(this).is(':checked')) {
                            $(this).parent().parent().parent().parent().find(".Date").attr('style', "display:none");
                            $(this).parent().parent().parent().parent().find(".ddlYear").attr('style', "display:inline");

                        } else {
                            $(this).parent().parent().parent().parent().find(".Date").val("");
                            $(this).parent().parent().parent().parent().find(".Date").attr('style', "display:inline");
                            $(this).parent().parent().parent().parent().find(".Date").attr("placeholder", "ngày/tháng/năm");
                            $(this).parent().parent().parent().parent().find(".ddlYear").attr('style', "display:none");
                        }
                    });

                    $('.ddlYear').change(function () {
                        $(this).parent().find(".Date").val($(this).val());

                    });


                    $('#Content_Create1_ddlNamSinh').change(function () {
                        $(".NgaySinh").val($(this).val());
                        setTimeout(function () {
                            EnableNgayCapCMND();
                        }, 500);
                    });

                    $("#Nam").click(function () {
                        if ($(this).is(':checked')) {
                            $(".NgaySinh").attr("placeholder", "năm");
                            $("#ThangNam").attr('checked', false);
                        } else {
                            $(".NgaySinh").attr("placeholder", "ngày/tháng/năm");
                        }
                    });
                    $(".CapLock").keyup(function (e) {
                        if ((e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105)) {
                            $(this).val($(this).val().toUpperCase());
                        }
                    });
                    $(".TruongSo").keydown(function (event) {
                        // Allow: backspace, delete, tab and escape
                        if (event.keyCode === 46 || event.keyCode === 8 || event.keyCode === 9 || event.keyCode === 27 ||
                                // Allow: Ctrl+A
                                        (event.keyCode === 65 && event.ctrlKey === true) ||
                                        // Allow: home, end, left, right
                                                (event.keyCode >= 35 && event.keyCode <= 39)) {
                                    // let it happen, don't do anything
                                    return;
                                } else {
                                    // Ensure that it is a number and stop the keypress
                                    if ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
                                        event.preventDefault();
                                    }
                                }
                            });
                    //tinh thanh change

                    $('#Content_Create1_ddlDiaChiThuongTruTinhThanh').change(function () {
                        getQuanHuyen($(this).val(), $('#selectDiaChiThuongTruQuanHuyen'));
                    });
                    $('#selectDiaChiThuongTruQuanHuyen').change(function () {
                        getPhuongXa($(this).val(), $('#selectDiaChiThuongTruPhuongXa'));
                    });
                    $('#selectDiaChiTamTruQuanHuyen').change(function () {
                        getPhuongXa($(this).val(), $('#selectDaiChiTamTruPhuongXa'));
                    });

                    $("#Content_Create1_btnSave").click(function () {
                        if (IsRecapchaValid() === true) {
                            if (checkValid() === true) {
                                return true;
                            } else {
                                return false;
                            }
                        } else {
                            return false;
                        }
                    });

                });

            }

            function IsRecapchaValid() {

                var res = grecaptcha.getResponse(widId);
                if (res === "" || res === undefined || res.length === 0)
                {
                    alert("Chọn tôi không phải là người máy (xác thực)");
                    return false;
                }
                return true;
            }
            function EnableNgayCapCMND() {

                var ngayCap = $("#Content_Create1_txtNgaysinh").val();
                var _date = new Date();
                var _validate = $("#Content_Create1_txtValidCMND").val().split('/');

                var _Curdate = new Date(_validate[2], _validate[1] - 1, _validate[0], 0, 0, 0);
                if (ngayCap.length === 4) {
                    _date = new Date(ngayCap, 1, 1, 0, 0, 0);
                } else {
                    var strFDate = $("#Content_Create1_txtNgaysinh").val().split('/');
                    _date = new Date(strFDate[2], strFDate[1] - 1, strFDate[0], 0, 0, 0);
                }

                if (_date < _Curdate) {
                    $("#Content_Create1_txtCmnd").attr("disabled", false);

                    $("#Content_Create1_txtNgaycap").attr("disabled", false);

                    $("#Content_Create1_ddlNoiCap").attr("disabled", false);
                    return 1;

                } else {
                    $("#Content_Create1_txtCmnd").val("");
                    $("#Content_Create1_txtCmnd").attr("disabled", true);
                    $("#Content_Create1_txtNgaycap").val("");
                    $("#Content_Create1_txtNgaycap").attr("disabled", true);
                    $("#Content_Create1_ddlNoiCap").val("");
                    $("#Content_Create1_ddlNoiCap").attr("disabled", true);
                    return 0;
                }
            }

            function checkValid() {
                var error = "";
                var countbug = 0;
                if ($("#Content_Create1_txtHoten").val().trim().length <= 0) {
                    error += "<li>Vui lòng nhập họ tên</li>";
                    countbug += 1;
                }
                if ($("#Content_Create1_ddlGioiTinh").val().trim().length <= 0) {
                    error += "<li>Vui lòng chọn giới tính</li>";
                    countbug += 1;
                }

                if (checkValidDate($("#Content_Create1_txtNgaysinh").val()) === 0)
                {
                    error += "<li>Vui lòng nhập ngày sinh đúng định dạng và nhỏ hơn ngày hiện tại</li>";
                    countbug += 1;
                }


                if (EnableNgayCapCMND() === 1) {
                    if (($('#Content_Create1_txtCmnd').val().length !== 9) && ($('#Content_Create1_txtCmnd').val().length !== 12)) {
                        error += "<li>Số Căn cước công dân / CMND chỉ nhập 9 hoặc 12 kí tự số</li>";
                        countbug += 1;
                    }
                    if ($('#Content_Create1_txtNgaycap').val().length <= 0) {
                        error += "<li>Vui lòng nhập ngày cấp Số Căn cước công dân / CMND </li>";
                        countbug += 1;
                    }

                    if (checkValidDate($('#Content_Create1_txtNgaycap').val()) === 0) {
                        error += "<li>Vui lòng nhập ngày cấp Số Căn cước công dân / CMND đúng định dạng và nhỏ hơn ngày hiện tại</li>";
                        countbug += 1;
                    }

                    if ($('#Content_Create1_ddlNoiCap').val().length <= 0) {
                        error += "<li>Vui lòng nhập nơi cấp Số Căn cước công dân / CMND </li>";
                        countbug += 1;
                    }
                }
                if ($("#Content_Create1_ddlQuocGiaNoiSinh").val().trim().length <= 0) {
                    error += "<li>Vui lòng chọn quốc gia nơi sinh</li>";
                    countbug += 1;
                }
                if ($("#Content_Create1_ddlQuocGiaNoiSinh").val() === "VNM") {
                    if ($("#Content_Create1_ddlNoiSinhId").val().trim().length <= 0) {
                        error += "<li>Vui lòng chọn Tỉnh - TP nơi sinh</li>";
                        countbug += 1;
                    }
                }

                if ($("#Content_Create1_ddlDantocid").val().trim().length <= 0) {
                    error += "<li>Vui lòng chọn dân tộc</li>";
                    countbug += 1;
                }
                if ($("#Content_Create1_ddlTongiaoid").val().trim().length <= 0) {
                    error += "<li>Vui lòng chọn tôn giáo</li>";
                    countbug += 1;
                }
                if ($("#Content_Create1_txtSodienthoai").val().trim().length < 8) {
                    error += "<li>Vui lòng nhập điện thoại liên hệ đúng định dạng</li>";
                    countbug += 1;
                }
                if ($("#Content_Create1_ddlDiaChiThuongTruTinhThanh").val() === "") {
                    error += "<li>Vui lòng chọn Tỉnh  thành thường trú</li>";
                    countbug += 1;
                }

                if (($("#selectDiaChiThuongTruQuanHuyen").val() === null) || ($("#selectDiaChiThuongTruQuanHuyen").val() === "")) {
                    error += "<li>Vui lòng chọn Quận  huyện thường trú</li>";
                    countbug += 1;
                }
                if (($("#selectDiaChiThuongTruPhuongXa").val() === null) || ($("#selectDiaChiThuongTruPhuongXa").val() === "")) {
                    error += "<li>Vui lòng chọn Phường  xã thường trú</li>";
                    countbug += 1;
                }

                if ($("#Content_Create1_txtDiachithuongtru").val().trim().length <= 0) {
                    error += "<li>Vui lòng nhập Địa chỉ thường trú</li>";
                    countbug += 1;
                }
                if ($("#Content_Create1_ddlNghenghiepid").val() === "") {
                    error += "<li>Vui lòng chọn Nghề nghiệp</li>";
                    countbug += 1;
                }
                if ($("#Content_Create1_txtHotenme").val().trim().length <= 0) {
                    error += "<li>Vui lòng nhập Họ tên Mẹ</li>";
                    countbug += 1;
                }

                if (checkValidDate($("#Content_Create1_txtNgaysinhme").val()) === 0) {
                    error += "<li>Vui lòng nhập đúng ngày sinh của mẹ</li>";
                    countbug += 1;
                }
                if ($("#Content_Create1_ddlNoiDungDeNgheId").val().trim().length <= 0) {
                    error += "<li>Vui lòng chọn Nội dung đề nghị</li>";
                    countbug += 1;
                }


                if ($("#Content_Create1_txtNgaycaphcgannhat") !== null && $("#Content_Create1_txtNgaycaphcgannhat").val() !== "") {
                    if (checkValidDateSoHoChieu($("#Content_Create1_txtNgaycaphcgannhat").val()) === 0) {
                        error += "<li>Ngày cấp hộ chiếu gần nhất chưa đúng định dạng </li>";
                        countbug += 1;
                    }
                }

                if ($(".AcceptedAgreement").is(":checked") === false) {
                    error += "<li>Vui lòng chọn Tôi xin chịu trách nhiệm trước pháp luật về lời khai trên. </li>";
                    countbug += 1;
                }

                if (countbug >= 1) {
                    //remove all old error
                    $('#lstErrorContent li').remove();
                    //show new list bug
                    $("#lstErrorContent").append(error);
                    $('html, body').animate({scrollTop: $(".Error").height()}, 800);
                    return false;
                }
                return true;

            }
            function checkValidDate(DateCompare) {

                if (DateCompare.length === 4) {
                    var _date = new Date(DateCompare, 1, 1, 0, 0, 0);
                    var curDate = new Date();
                    if (_date < curDate) {
                        return 1;
                    }
                }

                if (DateCompare.length === 10) {
                    var strFDate = DateCompare.split('/');
                    _date = new Date(strFDate[2], strFDate[1] - 1, strFDate[0], 0, 0, 0);
                    var curDate = new Date();
                    if (_date < curDate) {
                        return 1;
                    }
                }
                return 0;
            }
            function checkValidDateSoHoChieu(DateCompare) {

                if (DateCompare.length === 10) {
                    var strFDate = DateCompare.split('/');
                    _date = new Date(strFDate[2], strFDate[1] - 1, strFDate[0], 0, 0, 0);

                    var curDate = new Date();
                    if (_date < curDate) {
                        return 1;
                    }
                }
                return 0;
            }


            function getQuanHuyen(ProvinceId, ddlEffect) {

                $.ajax({
                    url: '/hochieu/Services/wsAutoComplete.asmx/getQuanHuyen',
                    data: "{'ProvinceId': '" + ProvinceId + "'}",
                    dataType: "json",
                    type: "POST",
                    contentType: "application/json; charset=utf-8",
                    success: function (data) {
                        json = eval("(" + data.d + ")");
                        $(function () {
                            ddlEffect.find('option').remove().end().append('<option value="">--- Chọn --- </option>');
                            for (i = 0; i < json.length; i++) {
                                var _Text = json[i]["TenNganGon"];
                                var _Value = json[i]["MaQuanHuyen"];
                                ddlEffect.append('<option value="' + _Value + '">' + _Text + '</option>');
                            }
                            return false;
                        });

                    }, //ham thuc thi neu thanh cong
                    error: function () {
                        alert("Có lỗi xảy ra. Vui lòng kiểm tra đường truyền");
                    } //ham thuc thi neu loi xay ra.
                });
                return false;
            }

            function getPhuongXa(ProvinceId, ddlEffect) {

                $.ajax({
                    url: '/hochieu/Services/wsAutoComplete.asmx/getPhuongXa',
                    data: "{'ProvinceId': '" + ProvinceId + "'}",
                    dataType: "json",
                    type: "POST",
                    contentType: "application/json; charset=utf-8",
                    success: function (data) {
                        json = eval("(" + data.d + ")");
                        $(function () {
                            ddlEffect.find('option').remove().end().append('<option value="">--- Chọn --- </option>');
                            for (i = 0; i < json.length; i++) {
                                var _Text = json[i]["TenPhuongXa"];
                                var _Value = json[i]["TenPhuongXa"];
                                ddlEffect.append('<option value="' + _Value + '">' + _Text + '</option>');
                            }
                            return false;
                        });

                    }, //ham thuc thi neu thanh cong
                    error: function () {
                        alert("Có lỗi xảy ra. Vui lòng kiểm tra đường truyền");
                    } //ham thuc thi neu loi xay ra.
                });
                return false;
            }

            function CheckCap() {
                var elem = $('.hasRealPerson').val();
                var haselem = $('.realperson-hash').val();

                if (rpHash(elem) === haselem) {
                    return true;
                } else {

                    alert('Vui lòng nhập đúng mã xác thực.');
                    $('.hasRealPerson').select();
                    $('.hasRealPerson').focus();
                    return false;
                }
            }
            function rpHash(value) {
                var hash = 5381;
                for (var i = 0; i < value.length; i++) {
                    hash = ((hash << 5) + hash) + value.charCodeAt(i);
                }
                return hash;
            }

        </script>
        <div id="Content_Create1_UpdatePanel1">

            <div  class="container">

                <div class="DivRow">
                    <h3>
                        <span id="Content_Create1_lblLoaiHoSo"><B>NHẬP TỜ KHAI CẤP, SỬA ĐỔI HỒ SƠ HỘ CHIẾU (TỜ KHAI ĐIỆN TỬ)</B></span>

                    </h3>
                </div>

                <div class="Error">
                    <div id="divError">
                        <ul id="lstErrorContent">
                        </ul>
                    </div>
                </div>

                <div class="DivRow">
                    <span class="fieldRequired">&nbsp;</span>Trường yêu cầu nhập dữ liệu
                </div>


                <form class="form-inline" role="form">

                    <div class="row HeaderRow">
                        <h4>THÔNG TIN NGƯỜI ĐƯỢC CẤP HỘ CHIẾU </h4>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pwd">Họ tên:<span class="fieldRequired">&nbsp;</span></label>
                                <input name="ctl00$Content$Create1$txtHoten" type="text" maxlength="120" id="Content_Create1_txtHoten" class="form-control CapLock" placeholder="Tiếng việt có dấu" />
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pwd">Giới tính:<span class="fieldRequired">&nbsp;</span></label>
                                <select name="ctl00$Content$Create1$ddlGioiTinh" id="Content_Create1_ddlGioiTinh" class="form-control">
                                    <option value="">---Chọn---</option>
                                    <option value="1">Nam</option>
                                    <option value="0">Nữ</option>

                                </select>


                            </div>
                        </div>
                        <div class="col-sm-4">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pwd">Sinh ngày:<span class="fieldRequired">&nbsp;</span>
                                    <div class="checkbox-inline">
                                        <label><input type="checkbox" id="Nam" name="Nam">Chỉ có năm sinh</label>
                                    </div>
                                </label>
                                <input name="ctl00$Content$Create1$txtNgaysinh" type="text" id="Content_Create1_txtNgaysinh" class="form-control Date form-control NgaySinh" />
                                <select name="ctl00$Content$Create1$ddlNamSinh" id="Content_Create1_ddlNamSinh" class="form-control" style="display:none">
                                    <option value="0">---Chọn---</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                    <option value="1934">1934</option>
                                    <option value="1933">1933</option>
                                    <option value="1932">1932</option>
                                    <option value="1931">1931</option>
                                    <option value="1930">1930</option>
                                    <option value="1929">1929</option>
                                    <option value="1928">1928</option>
                                    <option value="1927">1927</option>
                                    <option value="1926">1926</option>
                                    <option value="1925">1925</option>
                                    <option value="1924">1924</option>
                                    <option value="1923">1923</option>
                                    <option value="1922">1922</option>
                                    <option value="1921">1921</option>
                                    <option value="1920">1920</option>
                                    <option value="1919">1919</option>
                                    <option value="1918">1918</option>
                                    <option value="1917">1917</option>
                                    <option value="1916">1916</option>
                                    <option value="1915">1915</option>
                                    <option value="1914">1914</option>
                                    <option value="1913">1913</option>
                                    <option value="1912">1912</option>
                                    <option value="1911">1911</option>
                                    <option value="1910">1910</option>
                                    <option value="1909">1909</option>
                                    <option value="1908">1908</option>
                                    <option value="1907">1907</option>
                                    <option value="1906">1906</option>
                                    <option value="1905">1905</option>
                                    <option value="1904">1904</option>
                                    <option value="1903">1903</option>
                                    <option value="1902">1902</option>
                                    <option value="1901">1901</option>
                                    <option value="1900">1900</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">

                            <div class="form-group">
                                <label for="pwd">Quốc gia nơi sinh:<span class="fieldRequired">&nbsp;</span></label>
                                <select name="ctl00$Content$Create1$ddlQuocGiaNoiSinh" id="Content_Create1_ddlQuocGiaNoiSinh" class="form-control">
                                    <option value="">---Chọn---</option>
                                    <option value="VNM">Việt

                                        Nam</option>
                                    <option value="BHR">Bahrain</option>
                                    <option value="BGD">Bangladesh</option>
                                    <option value="BRB">Barbados</option>
                                    <option value="AFG">Afghanistan</option>
                                    <option value="BLR">Belarus</option>
                                    <option value="BEL">Belgium</option>
                                    <option value="BLZ">Belize</option>
                                    <option value="BEN">Benin</option>
                                    <option value="BMU">Bermuda</option>
                                    <option value="ALB">Albania</option>
                                    <option value="BTN">Bhutan</option>
                                    <option value="DZA">Algeria</option>
                                    <option value="ASM">American Samoa</option>
                                    <option value="AND">Andorra</option>
                                    <option value="AGO">Angola</option>
                                    <option value="AIA">Anguilla</option>
                                    <option value="ATA">Antarctica</option>
                                    <option value="ATG">Antigua and Barbuda</option>
                                    <option value="ARG">Argentina</option>
                                    <option value="ARM">Armenia</option>
                                    <option value="ABW">Aruba</option>
                                    <option value="AUS">Australia</option>
                                    <option value="AUT">Austria</option>
                                    <option value="AZE">Azerbaijan</option>
                                    <option value="BHS">Bahamas</option>
                                    <option value="BOL">Bolivia</option>
                                    <option value="BIH">Bosnia and Herzegovina</option>
                                    <option value="BWA">Botswana</option>
                                    <option value="BVT">Bouvet Island</option>
                                    <option value="BRA">Brazil</option>
                                    <option value="IOT">British India Ocean Territory</option>
                                    <option value="BRN">Brunei Darussalam</option>
                                    <option value="BGR">Bulgaria</option>
                                    <option value="BFA">Burkina Faso</option>
                                    <option value="BDI">Burundi</option>
                                    <option value="KHM">Cambodia</option>
                                    <option value="CMR">Cameroon</option>
                                    <option value="CAN">Canada</option>
                                    <option value="CPV">Cape

                                        Verde</option>
                                    <option value="CYM">Cayman Islands</option>
                                    <option value="CAF">Central African Republic</option>
                                    <option value="TCD">Chad</option>
                                    <option value="CHL">Chile</option>
                                    <option value="CHN">China</option>
                                    <option value="CXR">Christmas Island</option>
                                    <option value="CCK">Cocos

                                        (Keeling ) Islands</option>
                                    <option value="COL">Colombia</option>
                                    <option value="COM">Comoros</option>
                                    <option value="COG">Congo</option>
                                    <option value="COK">Cook

                                        Islands</option>
                                    <option value="CRI">Costa

                                        Rica</option>
                                    <option value="CIV">Cote

                                        d&#39; Ivoire</option>
                                    <option value="HRV">Croatia</option>
                                    <option value="CYP">Cyprus</option>
                                    <option value="CZE">Czech

                                        Republic</option>
                                    <option value="PRK">Korea

                                        Democratic Peoples Repu</option>
                                    <option value="DNK">Denmark</option>
                                    <option value="DJI">Djibouti</option>
                                    <option value="DMA">Dominica</option>
                                    <option value="DOM">Dominican Republic</option>
                                    <option value="TMP">East

                                        Timor</option>
                                    <option value="ECU">Ecuador</option>
                                    <option value="EGY">Egypt</option>
                                    <option value="SLV">El

                                        Salvado</option>
                                    <option value="GNQ">Equatorial Guinea</option>
                                    <option value="ERI">Eritrea</option>
                                    <option value="EST">Estonia</option>
                                    <option value="ETH">Ethiopia</option>
                                    <option value="FLK">Falkland Islands (Malvinas)</option>
                                    <option value="FRO">Faroe</option>
                                    <option value="FJI">Fiji</option>
                                    <option value="FIN">Finland</option>
                                    <option value="FRA">France</option>
                                    <option value="FXX">France Metropolitan</option>
                                    <option value="GUF">French Guiana</option>
                                    <option value="PYF">French Polynesia</option>
                                    <option value="ATF">French Southern Territories</option>
                                    <option value="GAB">Gabon</option>
                                    <option value="GMB">Gambia</option>
                                    <option value="GEO">Georgia</option>
                                    <option value="D">Germany</option>
                                    <option value="GHA">Ghana</option>
                                    <option value="GIB">Gibraltar</option>
                                    <option value="GRC">Greece</option>
                                    <option value="GRL">Greenland</option>
                                    <option value="GRD">Grenada</option>
                                    <option value="GLP">Guadeloupe</option>
                                    <option value="GUM">Guam</option>
                                    <option value="GTM">Guatemala</option>
                                    <option value="GIN">Guinea</option>
                                    <option value="GNB">Guinea-Bissau</option>
                                    <option value="GUY">Guyana</option>
                                    <option value="HTI">Haiti</option>
                                    <option value="HMD">Heard

                                        and McDonald Islands</option>
                                    <option value="-">Hightvolta</option>
                                    <option value="VAT">Holy

                                        See (Vatican City State</option>
                                    <option value="HND">Honduras</option>
                                    <option value="HKG">Hong

                                        Kong</option>
                                    <option value="HUN">Hungary</option>
                                    <option value="ISL">Iceland</option>
                                    <option value="IND">India</option>
                                    <option value="IDN">Indonesia</option>
                                    <option value="IRN">Iran

                                        Ilasmic Republic of</option>
                                    <option value="IRQ">Iraq</option>
                                    <option value="IRL">Ireland</option>
                                    <option value="ISR">Israel</option>
                                    <option value="ITA">Italy</option>
                                    <option value="JAM">Jamaica</option>
                                    <option value="JPN">Japan</option>
                                    <option value="JOR">Jordan</option>
                                    <option value="KAZ">Kazakhstan</option>
                                    <option value="KEN">Kenya</option>
                                    <option value="KIR">Kiribati</option>
                                    <option value="KWT">Kuwait</option>
                                    <option value="KGZ">Kyrgyzstan</option>
                                    <option value="LAO">Lao

                                        Peoples Democratic Republ</option>
                                    <option value="LVA">Latvia</option>
                                    <option value="LBN">Lebanon</option>
                                    <option value="LSO">Lesotho</option>
                                    <option value="LBR">Liberia</option>
                                    <option value="LBY">Libyan Arab Jamahiriya</option>
                                    <option value="LIE">Liechtenstein</option>
                                    <option value="LTU">Lithuania</option>
                                    <option value="LUX">Luxembourg</option>
                                    <option value="MAC">Macau</option>
                                    <option value="MDG">Madagacscar</option>
                                    <option value="MWI">Malawi</option>
                                    <option value="MYS">Malaysia</option>
                                    <option value="MDV">Maldives</option>
                                    <option value="MLI">Mali</option>
                                    <option value="MLT">Malta</option>
                                    <option value="MHL">Marshall Islands</option>
                                    <option value="MTQ">Martinique</option>
                                    <option value="MRT">Mauritania</option>
                                    <option value="MUS">Mauritius</option>
                                    <option value="MYT">Mayotte</option>
                                    <option value="MEX">Mexico</option>
                                    <option value="FSM">Micronesia Federated States o</option>
                                    <option value="MCO">Monaco</option>
                                    <option value="MNG">Mongolia</option>
                                    <option value="-">Montenegro</option>
                                    <option value="MSR">Montserrat</option>
                                    <option value="MDA">Moldova</option>
                                    <option value="MAR">Morocco</option>
                                    <option value="MOZ">Mozambique</option>
                                    <option value="MMR">Myanmar</option>
                                    <option value="NAM">Namibia</option>
                                    <option value="NRU">Nauru</option>
                                    <option value="NPL">Nepal</option>
                                    <option value="NLD">Netherlands Kingdom of the</option>
                                    <option value="ANT">Netherlands Antilles</option>
                                    <option value="NTZ">Neutral Zone</option>
                                    <option value="NZL">New

                                        Zealand</option>
                                    <option value="NIC">Nicaragua</option>
                                    <option value="NER">Niger</option>
                                    <option value="NCL">New

                                        Caledonia</option>
                                    <option value="NGA">Nigeria</option>
                                    <option value="NIU">Niue</option>
                                    <option value="NFK">Norgolk Island</option>
                                    <option value="MNP">Nothern Mariana Islands</option>
                                    <option value="NOR">Norway</option>
                                    <option value="OMN">Oman</option>
                                    <option value="-">Palestine</option>
                                    <option value="PAK">Pakistan</option>
                                    <option value="PLW">Palau</option>
                                    <option value="PAN">Panama</option>
                                    <option value="PNG">Papua New Guinea</option>
                                    <option value="PRY">Paragay</option>
                                    <option value="PER">Peru</option>
                                    <option value="PHL">Philippines</option>
                                    <option value="PCN">Pitcairn</option>
                                    <option value="POL">Poland</option>
                                    <option value="PLA">Polynesia</option>
                                    <option value="PRT">Portuga</option>
                                    <option value="PRI">Puerto Rico</option>
                                    <option value="QAT">Qatar</option>
                                    <option value="KOR">Korea Republic of</option>
                                    <option value="REU">Reunion</option>
                                    <option value="ROM">Romania</option>
                                    <option value="RUS">Russian Federation</option>
                                    <option value="RWA">Rwanda</option>
                                    <option value="-">Saharawi</option>
                                    <option value="SHN">St.Helena</option>
                                    <option value="KNA">Saint Kitts and Nevis</option>
                                    <option value="LCA">Saint Lucia</option>
                                    <option value="SPM">St.Pierre and Miquelon</option>
                                    <option value="VCT">Saint Vincent and the Grenadi</option>
                                    <option value="WSM">Samoa</option>
                                    <option value="SMR">San

                                        Marino</option>
                                    <option value="LCA">Santalucia</option>
                                    <option value="STP">Sao

                                        Tome and Principe</option>
                                    <option value="SAU">Saudi Arabia</option>
                                    <option value="-">Scotland</option>
                                    <option value="SEN">Senegal</option>
                                    <option value="-">Serbia</option>
                                    <option value="SYC">Seychelles</option>
                                    <option value="SLE">Sierra Leone</option>
                                    <option value="SGP">Singapore</option>
                                    <option value="SVK">Slovakia</option>
                                    <option value="SVN">Sloveinia</option>
                                    <option value="SLB">Solomon Islands</option>
                                    <option value="SOM">Somalia</option>
                                    <option value="ZAF">South Africa</option>
                                    <option value="SGS">South Georgia and the South S</option>
                                    <option value="ESP">Spain</option>
                                    <option value="LKA">Sri

                                        Lanka</option>
                                    <option value="SDN">Sudan</option>
                                    <option value="SUR">Suriname</option>
                                    <option value="SJM">Svalbd and Jan Mayen Islands</option>
                                    <option value="SWZ">Swaziland</option>
                                    <option value="SWE">Sweden</option>
                                    <option value="CHE">Switzerland</option>
                                    <option value="SYR">Syrian Arab Republic</option>
                                    <option value="TZA">Tanzania United Republic of</option>
                                    <option value="TWN">Taiwan Province of China</option>
                                    <option value="TJK">Tajikistan</option>
                                    <option value="THA">Thailand</option>
                                    <option value="MKD">Macedonia The former Yugoslav</option>
                                    <option value="TGO">Togo</option>
                                    <option value="TKL">Tokelau</option>
                                    <option value="TON">Tonga</option>
                                    <option value="TTO">Trinidad and Tobago</option>
                                    <option value="TUN">Tunisia</option>
                                    <option value="TUR">Turkey</option>
                                    <option value="TKM">Turkmenistan</option>
                                    <option value="TCA">Turks and Caicos Islands</option>
                                    <option value="TUV">Tuvalu</option>
                                    <option value="UGA">Uganda</option>
                                    <option value="UKR">Ukraine</option>
                                    <option value="ARE">United Arab Emirates</option>
                                    <option value="GBR">United Kingdom British Citize</option>
                                    <option value="GBD">United Kingdom British Depend</option>
                                    <option value="GBN">United Kingdom British Nation</option>
                                    <option value="GBO">United Kingdom British Overse</option>
                                    <option value="GBP">United Kingdom British Protec</option>
                                    <option value="GBS">United Kingdom British Subjec</option>
                                    <option value="USA">United States</option>
                                    <option value="UMI">United States Minor Outlying</option>
                                    <option value="UZB">Uzbekistan</option>
                                    <option value="VUT">Vanuatu</option>
                                    <option value="VEN">Venezuela</option>
                                    <option value="VGB">Virgin Islands (British)</option>
                                    <option value="VIR">Virgin Islands (U.S )</option>
                                    <option value="WLF">Wallis and Futuna Islands</option>
                                    <option value="ESH">Western Sahara</option>
                                    <option value="YEM">Yemen</option>
                                    <option value="YUG">Yugoslavia</option>
                                    <option value="ZAR">Zaire</option>
                                    <option value="ZMB">Zambia</option>
                                    <option value="ZWE">Zimbabwe</option>
                                    <option value="UNO">United Nations Organization</option>
                                    <option value="CUB">Cuba</option>
                                    <option value="-">Unidentified</option>

                                </select>

                            </div>

                        </div>

                        <div class="col-sm-4">

                            <div class="form-group">
                                <label for="pwd">Tỉnh / TP nơi sinh:<span class="fieldRequired">&nbsp;</span></label>
                                <select name="ctl00$Content$Create1$ddlNoiSinhId" id="Content_Create1_ddlNoiSinhId" class="form-control">
                                    <option value="">---Chọn---</option>
                                    <option value="701">TP. Hồ Ch&#237; Minh</option>
                                    <option value="411">Thừa Thi&#234;n -Huế</option>
                                    <option value="501">TP. Đ&#224; Nẵng</option>
                                    <option value="509">Ph&#250; Y&#234;n</option>
                                    <option value="201">H&#224; Giang</option>
                                    <option value="117">Ninh B&#236;nh</option>
                                    <option value="303">Sơn La</option>
                                    <option value="405">H&#224; Tĩnh</option>
                                    <option value="703">L&#226;m Đồng</option>
                                    <option value="217">Ph&#250; Thọ</option>
                                    <option value="225">Quảng Ninh</option>
                                    <option value="207">Bắc Kạn</option>
                                    <option value="105">H&#224; T&#226;y</option>
                                    <option value="801">Long An</option>
                                    <option value="603">Gia Lai</option>
                                    <option value="401">Thanh Ho&#225;</option>
                                    <option value="101">H&#224; Nội</option>
                                    <option value="109">Hưng Y&#234;n</option>
                                    <option value="503">Quảng Nam</option>
                                    <option value="715">B&#236;nh Thuận</option>
                                    <option value="219">Vĩnh Ph&#250;c</option>
                                    <option value="211">Tuy&#234;n Quang</option>
                                    <option value="103">Hải Ph&#242;ng</option>
                                    <option value="301">Lai Ch&#226;u</option>
                                    <option value="705">Ninh Thuận</option>
                                    <option value="717">B&#224; Rịa - Vũng T&#224;u</option>
                                    <option value="707">B&#236;nh Phước</option>
                                    <option value="209">Lạng Sơn</option>
                                    <option value="803">Đồng Th&#225;p</option>
                                    <option value="215">Th&#225;i Nguy&#234;n</option>
                                    <option value="606">Đắk N&#244;ng</option>
                                    <option value="709">T&#226;y Ninh</option>
                                    <option value="213">Y&#234;n B&#225;i</option>
                                    <option value="601">Kon Tum</option>
                                    <option value="221">Bắc Giang</option>
                                    <option value="507">B&#236;nh Định</option>
                                    <option value="823">C&#224; Mau</option>
                                    <option value="409">Quảng Trị</option>
                                    <option value="302">Điện Bi&#234;n</option>
                                    <option value="511">Kh&#225;nh Ho&#224;</option>
                                    <option value="115">Th&#225;i B&#236;nh</option>
                                    <option value="223">Bắc Ninh</option>
                                    <option value="711">B&#236;nh Dương</option>
                                    <option value="713">Đồng Nai</option>
                                    <option value="305">Ho&#224; B&#236;nh</option>
                                    <option value="819">S&#243;c Trăng</option>
                                    <option value="605">Đắk Lắk</option>
                                    <option value="203">Cao Bằng</option>
                                    <option value="816">Hậu Giang</option>
                                    <option value="817">Tr&#224; Vinh</option>
                                    <option value="407">Quảng B&#236;nh</option>
                                    <option value="505">Quảng Ng&#227;i</option>
                                    <option value="205">L&#224;o Cai</option>
                                    <option value="821">Bạc Li&#234;u</option>
                                    <option value="0NN">Nước ngo&#224;i</option>
                                    <option value="810">khong ro</option>
                                    <option value="809">Vĩnh Long</option>
                                    <option value="111">H&#224; Nam</option>
                                    <option value="815">Cần Thơ</option>
                                    <option value="805">An Giang</option>
                                    <option value="113">Nam Định</option>
                                    <option value="813">Ki&#234;n Giang</option>
                                    <option value="811">Bến Tre</option>
                                    <option value="403">Nghệ An</option>
                                    <option value="807">Tiền Giang</option>
                                    <option value="107">Hải Dương</option>

                                </select>

                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">




                        </div>
                        <div class="col-sm-4">

                        </div>
                        <div class="col-sm-4">

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pwd">Số Căn cước công dân / CMND:</label>
                                <input name="ctl00$Content$Create1$txtCmnd" type="text" maxlength="12" id="Content_Create1_txtCmnd" class="form-control TruongSo" placeholder="Bắt buộc đối với công dân trên 14 tuổi" />

                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pwd">Ngày cấp:</label>
                                <input name="ctl00$Content$Create1$txtNgaycap" type="text" id="Content_Create1_txtNgaycap" class="form-control NgayCapCMND" />

                            </div>
                        </div>
                        <div class="col-sm-4">

                            <div class="form-group">
                                <label for="pwd">Nơi cấp:</label>
                                <select name="ctl00$Content$Create1$ddlNoiCap" id="Content_Create1_ddlNoiCap" class="form-control">
                                    <option value="">---Chọn---</option>
                                    <option value="701">TP. Hồ Ch&#237; Minh</option>
                                    <option value="411">Thừa Thi&#234;n -Huế</option>
                                    <option value="501">TP. Đ&#224; Nẵng</option>
                                    <option value="509">Ph&#250; Y&#234;n</option>
                                    <option value="201">H&#224; Giang</option>
                                    <option value="117">Ninh B&#236;nh</option>
                                    <option value="303">Sơn La</option>
                                    <option value="405">H&#224; Tĩnh</option>
                                    <option value="703">L&#226;m Đồng</option>
                                    <option value="217">Ph&#250; Thọ</option>
                                    <option value="225">Quảng Ninh</option>
                                    <option value="207">Bắc Kạn</option>
                                    <option value="105">H&#224; T&#226;y</option>
                                    <option value="801">Long An</option>
                                    <option value="603">Gia Lai</option>
                                    <option value="401">Thanh Ho&#225;</option>
                                    <option value="101">H&#224; Nội</option>
                                    <option value="109">Hưng Y&#234;n</option>
                                    <option value="503">Quảng Nam</option>
                                    <option value="715">B&#236;nh Thuận</option>
                                    <option value="219">Vĩnh Ph&#250;c</option>
                                    <option value="211">Tuy&#234;n Quang</option>
                                    <option value="103">Hải Ph&#242;ng</option>
                                    <option value="301">Lai Ch&#226;u</option>
                                    <option value="705">Ninh Thuận</option>
                                    <option value="717">B&#224; Rịa - Vũng T&#224;u</option>
                                    <option value="707">B&#236;nh Phước</option>
                                    <option value="209">Lạng Sơn</option>
                                    <option value="803">Đồng Th&#225;p</option>
                                    <option value="215">Th&#225;i Nguy&#234;n</option>
                                    <option value="606">Đắk N&#244;ng</option>
                                    <option value="709">T&#226;y Ninh</option>
                                    <option value="213">Y&#234;n B&#225;i</option>
                                    <option value="601">Kon Tum</option>
                                    <option value="221">Bắc Giang</option>
                                    <option value="507">B&#236;nh Định</option>
                                    <option value="823">C&#224; Mau</option>
                                    <option value="409">Quảng Trị</option>
                                    <option value="302">Điện Bi&#234;n</option>
                                    <option value="511">Kh&#225;nh Ho&#224;</option>
                                    <option value="115">Th&#225;i B&#236;nh</option>
                                    <option value="223">Bắc Ninh</option>
                                    <option value="711">B&#236;nh Dương</option>
                                    <option value="713">Đồng Nai</option>
                                    <option value="305">Ho&#224; B&#236;nh</option>
                                    <option value="819">S&#243;c Trăng</option>
                                    <option value="605">Đắk Lắk</option>
                                    <option value="203">Cao Bằng</option>
                                    <option value="816">Hậu Giang</option>
                                    <option value="817">Tr&#224; Vinh</option>
                                    <option value="407">Quảng B&#236;nh</option>
                                    <option value="505">Quảng Ng&#227;i</option>
                                    <option value="205">L&#224;o Cai</option>
                                    <option value="821">Bạc Li&#234;u</option>
                                    <option value="0NN">Nước ngo&#224;i</option>
                                    <option value="810">khong ro</option>
                                    <option value="809">Vĩnh Long</option>
                                    <option value="111">H&#224; Nam</option>
                                    <option value="815">Cần Thơ</option>
                                    <option value="805">An Giang</option>
                                    <option value="113">Nam Định</option>
                                    <option value="813">Ki&#234;n Giang</option>
                                    <option value="811">Bến Tre</option>
                                    <option value="403">Nghệ An</option>
                                    <option value="807">Tiền Giang</option>
                                    <option value="107">Hải Dương</option>

                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">

                            <div class="form-group">
                                <label for="pwd">Dân tộc:<span class="fieldRequired">&nbsp;</span></label>
                                <select name="ctl00$Content$Create1$ddlDantocid" id="Content_Create1_ddlDantocid" class="form-control">
                                    <option value="">---Chọn---</option>
                                    <option value="1">Kinh (Việt)</option>
                                    <option value="40">Ph&#249; L&#225;</option>
                                    <option value="52">Br&#226;u</option>
                                    <option value="23">Bru-V&#226;n Kiều</option>
                                    <option value="26">Cơ-Tu</option>
                                    <option value="15">S&#225;n Chay(Cao

                                        Lan-S&#225;n Chỉ)</option>
                                    <option value="28">Mạ</option>
                                    <option value="19">Hr&#234;</option>
                                    <option value="17">Chăm (Ch&#224;m)</option>
                                    <option value="36">Chu-Ru</option>
                                    <option value="49">Bố Y</option>
                                    <option value="47">Cơ Lao</option>
                                    <option value="30">Cọ</option>
                                    <option value="50">Si La</option>
                                    <option value="38">La Ch&#237;</option>
                                    <option value="5">Khơ-Me</option>
                                    <option value="64">D&#226;n Tộc Kh&#225;c</option>
                                    <option value="27">Gi&#233;-Tri&#234;ng</option>
                                    <option value="32">Chơ-Ro</option>
                                    <option value="10">Gia Rai</option>
                                    <option value="13">Ba-Na</option>
                                    <option value="51">Pu P&#233;o</option>
                                    <option value="24">Thổ (4)</option>
                                    <option value="41">La Hủ</option>
                                    <option value="37">L&#224;o</option>
                                    <option value="42">Lự</option>
                                    <option value="9">Dao</option>
                                    <option value="45">Mảng</option>
                                    <option value="8">H&#39;M&#244;ng(M&#232;o)</option>
                                    <option value="6">Mường</option>
                                    <option value="43">L&#244; L&#244;</option>
                                    <option value="25">Gi&#225;y</option>
                                    <option value="46">P&#224; Thẻn</option>
                                    <option value="20">M&#39;n&#244;ng</option>
                                    <option value="34">Xinh-Mun</option>
                                    <option value="21">Ra-Glai</option>
                                    <option value="12">&#202;-Đ&#234;</option>
                                    <option value="54">Rơ-Măm</option>
                                    <option value="44">Chứt</option>
                                    <option value="18">S&#225;n D&#236;u</option>
                                    <option value="53">Ơ Đu</option>
                                    <option value="3">Th&#225;i</option>
                                    <option value="2">T&#224;y</option>
                                    <option value="31">T&#224;-&#212;i</option>
                                    <option value="4">Hoa(H&#225;n)</option>
                                    <option value="35">H&#224; Nh&#236;</option>
                                    <option value="29">Khơ-M&#250;</option>
                                    <option value="39">La Ha</option>
                                    <option value="33">Kh&#225;ng</option>
                                    <option value="22">Xti&#234;ng</option>
                                    <option value="48">Cống</option>
                                    <option value="11">Ngải</option>
                                    <option value="14">Xơ-Đăng</option>
                                    <option value="16">Cơ-Ho</option>
                                    <option value="7">N&#249;ng</option>

                                </select>

                            </div>
                        </div>
                        <div class="col-sm-4">

                            <div class="form-group">
                                <label for="pwd">Tôn giáo:<span class="fieldRequired">&nbsp;</span></label>
                                <select name="ctl00$Content$Create1$ddlTongiaoid" id="Content_Create1_ddlTongiaoid" class="form-control">
                                    <option value="">---Chọn---</option>
                                    <option value="8">Kh&#244;ng T&#244;n Gi&#225;o</option>
                                    <option value="3">Đạo

                                        Phật</option>
                                    <option value="4">Đạo

                                        Cao Đ&#224;i</option>
                                    <option value="1">Đạo

                                        Thi&#234;n Ch&#250;a</option>
                                    <option value="5">Đạo

                                        H&#242;a hảo</option>
                                    <option value="2">Đạo

                                        Tin L&#224;nh</option>
                                    <option value="9">Đạo

                                        Hồi</option>
                                    <option value="7">Đạo

                                        kh&#225;c</option>
                                    <option value="6">Đạo

                                        B&#224; Hai</option>

                                </select>

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pwd">Số điện thoại liên hệ:<span class="fieldRequired">&nbsp;</span></label>
                                <input name="ctl00$Content$Create1$txtSodienthoai" type="text" maxlength="20" id="Content_Create1_txtSodienthoai" class="form-control TruongSo" />
                            </div>
                        </div>

                    </div>

                    <div class="row HeaderRow">
                        <h4>ĐỊA CHỈ THƯỜNG TRÚ (ghi theo sổ Hộ Khẩu)</h4>

                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pwd">Tỉnh thành:<span class="fieldRequired">&nbsp;</span></label>
                                <select name="ctl00$Content$Create1$ddlDiaChiThuongTruTinhThanh" id="Content_Create1_ddlDiaChiThuongTruTinhThanh" class="form-control">
                                    <option selected="selected" value="">---Chọn---</option>
                                    <option value="701">TP. Hồ Ch&#237; Minh</option>
                                    <option value="411">Thừa Thi&#234;n -Huế</option>
                                    <option value="501">TP. Đ&#224; Nẵng</option>
                                    <option value="509">Ph&#250; Y&#234;n</option>
                                    <option value="201">H&#224; Giang</option>
                                    <option value="117">Ninh B&#236;nh</option>
                                    <option value="303">Sơn La</option>
                                    <option value="405">H&#224; Tĩnh</option>
                                    <option value="703">L&#226;m Đồng</option>
                                    <option value="217">Ph&#250; Thọ</option>
                                    <option value="225">Quảng Ninh</option>
                                    <option value="207">Bắc Kạn</option>
                                    <option value="105">H&#224; T&#226;y</option>
                                    <option value="801">Long An</option>
                                    <option value="603">Gia Lai</option>
                                    <option value="401">Thanh Ho&#225;</option>
                                    <option value="101">H&#224; Nội</option>
                                    <option value="109">Hưng Y&#234;n</option>
                                    <option value="503">Quảng Nam</option>
                                    <option value="715">B&#236;nh Thuận</option>
                                    <option value="219">Vĩnh Ph&#250;c</option>
                                    <option value="211">Tuy&#234;n Quang</option>
                                    <option value="103">Hải Ph&#242;ng</option>
                                    <option value="301">Lai Ch&#226;u</option>
                                    <option value="705">Ninh Thuận</option>
                                    <option value="717">B&#224; Rịa - Vũng T&#224;u</option>
                                    <option value="707">B&#236;nh Phước</option>
                                    <option value="209">Lạng Sơn</option>
                                    <option value="803">Đồng Th&#225;p</option>
                                    <option value="215">Th&#225;i Nguy&#234;n</option>
                                    <option value="606">Đắk N&#244;ng</option>
                                    <option value="709">T&#226;y Ninh</option>
                                    <option value="213">Y&#234;n B&#225;i</option>
                                    <option value="601">Kon Tum</option>
                                    <option value="221">Bắc Giang</option>
                                    <option value="507">B&#236;nh Định</option>
                                    <option value="823">C&#224; Mau</option>
                                    <option value="409">Quảng Trị</option>
                                    <option value="302">Điện Bi&#234;n</option>
                                    <option value="511">Kh&#225;nh Ho&#224;</option>
                                    <option value="115">Th&#225;i B&#236;nh</option>
                                    <option value="223">Bắc Ninh</option>
                                    <option value="711">B&#236;nh Dương</option>
                                    <option value="713">Đồng Nai</option>
                                    <option value="305">Ho&#224; B&#236;nh</option>
                                    <option value="819">S&#243;c Trăng</option>
                                    <option value="605">Đắk Lắk</option>
                                    <option value="203">Cao Bằng</option>
                                    <option value="816">Hậu Giang</option>
                                    <option value="817">Tr&#224; Vinh</option>
                                    <option value="407">Quảng B&#236;nh</option>
                                    <option value="505">Quảng Ng&#227;i</option>
                                    <option value="205">L&#224;o Cai</option>
                                    <option value="821">Bạc Li&#234;u</option>
                                    <option value="0NN">Nước ngo&#224;i</option>
                                    <option value="810">khong ro</option>
                                    <option value="809">Vĩnh Long</option>
                                    <option value="111">H&#224; Nam</option>
                                    <option value="815">Cần Thơ</option>
                                    <option value="805">An Giang</option>
                                    <option value="113">Nam Định</option>
                                    <option value="813">Ki&#234;n Giang</option>
                                    <option value="811">Bến Tre</option>
                                    <option value="403">Nghệ An</option>
                                    <option value="807">Tiền Giang</option>
                                    <option value="107">Hải Dương</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pwd">Quận/Huyện:<span class="fieldRequired">&nbsp;</span></label>
                                <select name="ctl00$Content$Create1$ddlDiaChiThuongTruQuanHuyen" id="Content_Create1_ddlDiaChiThuongTruQuanHuyen" class="form-control" style="display:none">

                                </select>

                                <select id="selectDiaChiThuongTruQuanHuyen" class="form-control" name="selectDiaChiThuongTruQuanHuyen"></select>

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pwd">Phường/Xã:<span class="fieldRequired">&nbsp;</span></label>
                                <select name="ctl00$Content$Create1$ddlDiaChiThuongTruPhuongXa" id="Content_Create1_ddlDiaChiThuongTruPhuongXa" class="form-control" style="display:none">

                                </select>
                                <select id="selectDiaChiThuongTruPhuongXa" class="form-control" name="selectDiaChiThuongTruPhuongXa"></select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="pwd">Số nhà, tên đường:<span class="fieldRequired">&nbsp;</span></label>

                                <input name="ctl00$Content$Create1$txtDiachithuongtru" type="text" maxlength="120" id="Content_Create1_txtDiachithuongtru" class="form-control" />

                            </div>
                        </div>
                    </div>
                    <div class="row HeaderRow">
                        <h4>ĐỊA CHỈ TẠM TRÚ TẠI TP.HCM (ghi theo sổ Tạm Trú -  Còn thời hạn)</h4>
                    </div>
                    <div class="row">
                        <i><b>Chỉ nhập khi hộ khẩu ở địa phương khác Tp.HCM</b></i>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pwd">Tỉnh / Thành:</label>

                                <select name="ctl00$Content$Create1$ddlDiaChiTamTruTinhThanh" onchange="javascript:setTimeout( & #39; __doPostBack(\ & #39; ctl00$Content$Create1$ddlDiaChiTamTruTinhThanh\ & #39; , \ & #39; \ & #39; ) & #39; , 0)" id="Content_Create1_ddlDiaChiTamTruTinhThanh" disabled="disabled" class="aspNetDisabled form-control">
                                    <option value="0">--- Chọn ---</option>
                                    <option selected="selected" value="701">TP. Hồ Ch&#237; Minh</option>
                                    <option value="411">Thừa Thi&#234;n -Huế</option>
                                    <option value="501">TP. Đ&#224; Nẵng</option>
                                    <option value="509">Ph&#250; Y&#234;n</option>
                                    <option value="201">H&#224; Giang</option>
                                    <option value="117">Ninh B&#236;nh</option>
                                    <option value="303">Sơn La</option>
                                    <option value="405">H&#224; Tĩnh</option>
                                    <option value="703">L&#226;m Đồng</option>
                                    <option value="217">Ph&#250; Thọ</option>
                                    <option value="225">Quảng Ninh</option>
                                    <option value="207">Bắc Kạn</option>
                                    <option value="105">H&#224; T&#226;y</option>
                                    <option value="801">Long An</option>
                                    <option value="603">Gia Lai</option>
                                    <option value="401">Thanh Ho&#225;</option>
                                    <option value="101">H&#224; Nội</option>
                                    <option value="109">Hưng Y&#234;n</option>
                                    <option value="503">Quảng Nam</option>
                                    <option value="715">B&#236;nh Thuận</option>
                                    <option value="219">Vĩnh Ph&#250;c</option>
                                    <option value="211">Tuy&#234;n Quang</option>
                                    <option value="103">Hải Ph&#242;ng</option>
                                    <option value="301">Lai Ch&#226;u</option>
                                    <option value="705">Ninh Thuận</option>
                                    <option value="717">B&#224; Rịa - Vũng T&#224;u</option>
                                    <option value="707">B&#236;nh Phước</option>
                                    <option value="209">Lạng Sơn</option>
                                    <option value="803">Đồng Th&#225;p</option>
                                    <option value="215">Th&#225;i Nguy&#234;n</option>
                                    <option value="606">Đắk N&#244;ng</option>
                                    <option value="709">T&#226;y Ninh</option>
                                    <option value="213">Y&#234;n B&#225;i</option>
                                    <option value="601">Kon Tum</option>
                                    <option value="221">Bắc Giang</option>
                                    <option value="507">B&#236;nh Định</option>
                                    <option value="823">C&#224; Mau</option>
                                    <option value="409">Quảng Trị</option>
                                    <option value="302">Điện Bi&#234;n</option>
                                    <option value="511">Kh&#225;nh Ho&#224;</option>
                                    <option value="115">Th&#225;i B&#236;nh</option>
                                    <option value="223">Bắc Ninh</option>
                                    <option value="711">B&#236;nh Dương</option>
                                    <option value="713">Đồng Nai</option>
                                    <option value="305">Ho&#224; B&#236;nh</option>
                                    <option value="819">S&#243;c Trăng</option>
                                    <option value="605">Đắk Lắk</option>
                                    <option value="203">Cao Bằng</option>
                                    <option value="816">Hậu Giang</option>
                                    <option value="817">Tr&#224; Vinh</option>
                                    <option value="407">Quảng B&#236;nh</option>
                                    <option value="505">Quảng Ng&#227;i</option>
                                    <option value="205">L&#224;o Cai</option>
                                    <option value="821">Bạc Li&#234;u</option>
                                    <option value="0NN">Nước ngo&#224;i</option>
                                    <option value="810">khong ro</option>
                                    <option value="809">Vĩnh Long</option>
                                    <option value="111">H&#224; Nam</option>
                                    <option value="815">Cần Thơ</option>
                                    <option value="805">An Giang</option>
                                    <option value="113">Nam Định</option>
                                    <option value="813">Ki&#234;n Giang</option>
                                    <option value="811">Bến Tre</option>
                                    <option value="403">Nghệ An</option>
                                    <option value="807">Tiền Giang</option>
                                    <option value="107">Hải Dương</option>

                                </select>

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pwd">Quận / Huyện tạm trú:</label>
                                <select name="ctl00$Content$Create1$ddlDiaChiTamTruQuanHuyen" id="Content_Create1_ddlDiaChiTamTruQuanHuyen" class="form-control" style="display:none">
                                    <option selected="selected" value="">---Chọn---</option>
                                    <option value="701039">Huyện B&#236;nh Ch&#225;nh</option>
                                    <option value="701043">Huyện Cần Giờ</option>
                                    <option value="701035">Huyện Củ Chi</option>
                                    <option value="701037">Huyện H&#243;c M&#244;n</option>
                                    <option value="701041">Huyện Nh&#224; B&#232;</option>
                                    <option value="701001">Quận 1</option>
                                    <option value="701019">Quận 10</option>
                                    <option value="701021">Quận 11</option>
                                    <option value="701023">Quận 12</option>
                                    <option value="701003">Quận 2</option>
                                    <option value="701005">Quận 3</option>
                                    <option value="701007">Quận 4</option>
                                    <option value="701009">Quận 5</option>
                                    <option value="701011">Quận 6</option>
                                    <option value="701013">Quận 7</option>
                                    <option value="701015">Quận 8</option>
                                    <option value="701017">Quận 9</option>
                                    <option value="701047">Quận B&#236;nh T&#226;n</option>
                                    <option value="701034">Quận B&#236;nh T&#226;n</option>
                                    <option value="701029">Quận B&#236;nh Thạnh</option>
                                    <option value="701025">Quận G&#242; Vấp</option>
                                    <option value="701031">Quận Ph&#250; Nhuận</option>
                                    <option value="701027">Quận T&#226;n B&#236;nh</option>
                                    <option value="701045">Quận T&#226;n Ph&#250;</option>
                                    <option value="701033">Quận Thủ Đức</option>

                                </select>
                                <select id="selectDiaChiTamTruQuanHuyen"  name="selectDiaChiTamTruQuanHuyen" class="form-control"></select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label for="pwd">Phường / Xã tạm trú:</label>
                            <select name="ctl00$Content$Create1$ddlDaiChiTamTruPhuongXa" id="Content_Create1_ddlDaiChiTamTruPhuongXa" class="form-control" style="display:none">

                            </select>
                            <select id="selectDaiChiTamTruPhuongXa"  name="selectDaiChiTamTruPhuongXa" class="form-control"></select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="pwd">Số nhà, tên đường:</label>
                                <input name="ctl00$Content$Create1$txtDiachitamtru" type="text" maxlength="150" id="Content_Create1_txtDiachitamtru" class="form-control" />

                            </div>
                        </div>
                    </div>
                    <div class="row HeaderRow">
                        <h4>Thông tin nghề nghiệp</h4>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pwd">Nghề nghiệp:<span class="fieldRequired">&nbsp;</span></label>
                                <select name="ctl00$Content$Create1$ddlNghenghiepid" id="Content_Create1_ddlNghenghiepid" class="form-control">
                                    <option value="">---Chọn---</option>
                                    <option value="4">B&#225;c sĩ</option>
                                    <option value="12">B&#225;o ch&#237;</option>
                                    <option value="0">Bu&#244;n b&#225;n</option>
                                    <option value="20">Chưa c&#243; nghề</option>
                                    <option value="24">Chuy&#234;n vi&#234;n</option>
                                    <option value="19">C&#244;ng nh&#226;n</option>
                                    <option value="2">Gi&#225;m đốc</option>
                                    <option value="15">Gi&#225;o sư</option>
                                    <option value="18">Gi&#225;o vi&#234;n</option>
                                    <option value="6">Học sinh</option>
                                    <option value="14">Hưu tr&#237;, Gi&#224;</option>
                                    <option value="17">Kế to&#225;n</option>
                                    <option value="3">Kỹ sư</option>
                                    <option value="11">L&#224;m c&#244;ng</option>
                                    <option value="8">Luật sư</option>
                                    <option value="21">Mục sư</option>
                                    <option value="23">Nh&#226;n vi&#234;n</option>
                                    <option value="10">Nội trợ</option>
                                    <option value="9">Quản l&#253;</option>
                                    <option value="7">Sinh vi&#234;n</option>
                                    <option value="25">Thất nghiệp</option>
                                    <option value="16">Thư k&#253;</option>
                                    <option value="1">Thương nh&#226;n</option>
                                    <option value="13">Trẻ em</option>
                                    <option value="22">Tu sỹ</option>
                                    <option value="5">Vi&#234;n chức</option>

                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pwd">Tên cơ quan:</label>
                                <input name="ctl00$Content$Create1$txtTenCoQuan" type="text" maxlength="150" id="Content_Create1_txtTenCoQuan" class="form-control Caplock" />

                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="pwd">Địa chỉ cơ quan:</label>
                                <input name="ctl00$Content$Create1$txtTenvadiachicoquan" type="text" id="Content_Create1_txtTenvadiachicoquan" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row HeaderRow">
                        <h4>THÔNG TIN GIA ĐÌNH</h4>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pwd">Họ tên Cha:</label>
                                <input name="ctl00$Content$Create1$txtHoTenCha" type="text" maxlength="120" id="Content_Create1_txtHoTenCha" class="form-control CapLock" />

                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pwd">Ngày sinh:
                                    <div class="checkbox-inline">
                                        <label><input type="checkbox" id="NamCha" name="NamMe" class="ChiCoNamSinh">Chỉ có năm sinh</label>
                                    </div>
                                </label>
                                <input name="ctl00$Content$Create1$txtNgaysinhcha" type="text" id="Content_Create1_txtNgaysinhcha" class="form-control Date" />
                                <select name="ctl00$Content$Create1$ddlNgaySinhCha" id="Content_Create1_ddlNgaySinhCha" class="form-control ddlYear" style="display:none">
                                    <option value="">---Chọn---</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                    <option value="1934">1934</option>
                                    <option value="1933">1933</option>
                                    <option value="1932">1932</option>
                                    <option value="1931">1931</option>
                                    <option value="1930">1930</option>
                                    <option value="1929">1929</option>
                                    <option value="1928">1928</option>
                                    <option value="1927">1927</option>
                                    <option value="1926">1926</option>
                                    <option value="1925">1925</option>
                                    <option value="1924">1924</option>
                                    <option value="1923">1923</option>
                                    <option value="1922">1922</option>
                                    <option value="1921">1921</option>
                                    <option value="1920">1920</option>
                                    <option value="1919">1919</option>
                                    <option value="1918">1918</option>
                                    <option value="1917">1917</option>
                                    <option value="1916">1916</option>
                                    <option value="1915">1915</option>
                                    <option value="1914">1914</option>
                                    <option value="1913">1913</option>
                                    <option value="1912">1912</option>
                                    <option value="1911">1911</option>
                                    <option value="1910">1910</option>
                                    <option value="1909">1909</option>
                                    <option value="1908">1908</option>
                                    <option value="1907">1907</option>
                                    <option value="1906">1906</option>
                                    <option value="1905">1905</option>
                                    <option value="1904">1904</option>
                                    <option value="1903">1903</option>
                                    <option value="1902">1902</option>
                                    <option value="1901">1901</option>
                                    <option value="1900">1900</option>
                                    <option value="1899">1899</option>
                                    <option value="1898">1898</option>
                                    <option value="1897">1897</option>
                                    <option value="1896">1896</option>
                                    <option value="1895">1895</option>
                                    <option value="1894">1894</option>
                                    <option value="1893">1893</option>
                                    <option value="1892">1892</option>
                                    <option value="1891">1891</option>
                                    <option value="1890">1890</option>
                                    <option value="1889">1889</option>
                                    <option value="1888">1888</option>
                                    <option value="1887">1887</option>
                                    <option value="1886">1886</option>
                                    <option value="1885">1885</option>
                                    <option value="1884">1884</option>
                                    <option value="1883">1883</option>
                                    <option value="1882">1882</option>
                                    <option value="1881">1881</option>
                                    <option value="1880">1880</option>
                                    <option value="1879">1879</option>
                                    <option value="1878">1878</option>
                                    <option value="1877">1877</option>
                                    <option value="1876">1876</option>
                                    <option value="1875">1875</option>
                                    <option value="1874">1874</option>
                                    <option value="1873">1873</option>
                                    <option value="1872">1872</option>
                                    <option value="1871">1871</option>
                                    <option value="1870">1870</option>
                                    <option value="1869">1869</option>
                                    <option value="1868">1868</option>
                                    <option value="1867">1867</option>
                                    <option value="1866">1866</option>
                                    <option value="1865">1865</option>
                                    <option value="1864">1864</option>
                                    <option value="1863">1863</option>
                                    <option value="1862">1862</option>
                                    <option value="1861">1861</option>
                                    <option value="1860">1860</option>
                                    <option value="1859">1859</option>
                                    <option value="1858">1858</option>
                                    <option value="1857">1857</option>
                                    <option value="1856">1856</option>
                                    <option value="1855">1855</option>
                                    <option value="1854">1854</option>
                                    <option value="1853">1853</option>
                                    <option value="1852">1852</option>
                                    <option value="1851">1851</option>
                                    <option value="1850">1850</option>
                                    <option value="1849">1849</option>
                                    <option value="1848">1848</option>
                                    <option value="1847">1847</option>
                                    <option value="1846">1846</option>
                                    <option value="1845">1845</option>
                                    <option value="1844">1844</option>
                                    <option value="1843">1843</option>
                                    <option value="1842">1842</option>
                                    <option value="1841">1841</option>
                                    <option value="1840">1840</option>
                                    <option value="1839">1839</option>
                                    <option value="1838">1838</option>
                                    <option value="1837">1837</option>
                                    <option value="1836">1836</option>
                                    <option value="1835">1835</option>
                                    <option value="1834">1834</option>
                                    <option value="1833">1833</option>
                                    <option value="1832">1832</option>
                                    <option value="1831">1831</option>
                                    <option value="1830">1830</option>
                                    <option value="1829">1829</option>
                                    <option value="1828">1828</option>
                                    <option value="1827">1827</option>
                                    <option value="1826">1826</option>
                                    <option value="1825">1825</option>
                                    <option value="1824">1824</option>
                                    <option value="1823">1823</option>
                                    <option value="1822">1822</option>
                                    <option value="1821">1821</option>
                                    <option value="1820">1820</option>
                                    <option value="1819">1819</option>
                                    <option value="1818">1818</option>
                                    <option value="1817">1817</option>
                                    <option value="1816">1816</option>
                                    <option value="1815">1815</option>
                                    <option value="1814">1814</option>
                                    <option value="1813">1813</option>
                                    <option value="1812">1812</option>
                                    <option value="1811">1811</option>
                                    <option value="1810">1810</option>
                                    <option value="1809">1809</option>
                                    <option value="1808">1808</option>
                                    <option value="1807">1807</option>
                                    <option value="1806">1806</option>
                                    <option value="1805">1805</option>
                                    <option value="1804">1804</option>
                                    <option value="1803">1803</option>
                                    <option value="1802">1802</option>
                                    <option value="1801">1801</option>
                                    <option value="1800">1800</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pwd">Họ tên Mẹ:<span class="fieldRequired">&nbsp;</span></label>
                                <input name="ctl00$Content$Create1$txtHotenme" type="text" maxlength="120" id="Content_Create1_txtHotenme" class="form-control CapLock" />
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pwd">Ngày sinh:<span class="fieldRequired">&nbsp;</span>
                                    <div class="checkbox-inline">
                                        <label><input type="checkbox" id="NamMe" name="NamMe" class="ChiCoNamSinh">Chỉ có năm sinh</label>
                                    </div>
                                </label>
                                <input name="ctl00$Content$Create1$txtNgaysinhme" type="text" id="Content_Create1_txtNgaysinhme" class="form-control Date" />
                                <select name="ctl00$Content$Create1$ddlNgaySinhMe" id="Content_Create1_ddlNgaySinhMe" class="form-control ddlYear" style="display:none">
                                    <option value="">---Chọn---</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                    <option value="1934">1934</option>
                                    <option value="1933">1933</option>
                                    <option value="1932">1932</option>
                                    <option value="1931">1931</option>
                                    <option value="1930">1930</option>
                                    <option value="1929">1929</option>
                                    <option value="1928">1928</option>
                                    <option value="1927">1927</option>
                                    <option value="1926">1926</option>
                                    <option value="1925">1925</option>
                                    <option value="1924">1924</option>
                                    <option value="1923">1923</option>
                                    <option value="1922">1922</option>
                                    <option value="1921">1921</option>
                                    <option value="1920">1920</option>
                                    <option value="1919">1919</option>
                                    <option value="1918">1918</option>
                                    <option value="1917">1917</option>
                                    <option value="1916">1916</option>
                                    <option value="1915">1915</option>
                                    <option value="1914">1914</option>
                                    <option value="1913">1913</option>
                                    <option value="1912">1912</option>
                                    <option value="1911">1911</option>
                                    <option value="1910">1910</option>
                                    <option value="1909">1909</option>
                                    <option value="1908">1908</option>
                                    <option value="1907">1907</option>
                                    <option value="1906">1906</option>
                                    <option value="1905">1905</option>
                                    <option value="1904">1904</option>
                                    <option value="1903">1903</option>
                                    <option value="1902">1902</option>
                                    <option value="1901">1901</option>
                                    <option value="1900">1900</option>
                                    <option value="1899">1899</option>
                                    <option value="1898">1898</option>
                                    <option value="1897">1897</option>
                                    <option value="1896">1896</option>
                                    <option value="1895">1895</option>
                                    <option value="1894">1894</option>
                                    <option value="1893">1893</option>
                                    <option value="1892">1892</option>
                                    <option value="1891">1891</option>
                                    <option value="1890">1890</option>
                                    <option value="1889">1889</option>
                                    <option value="1888">1888</option>
                                    <option value="1887">1887</option>
                                    <option value="1886">1886</option>
                                    <option value="1885">1885</option>
                                    <option value="1884">1884</option>
                                    <option value="1883">1883</option>
                                    <option value="1882">1882</option>
                                    <option value="1881">1881</option>
                                    <option value="1880">1880</option>
                                    <option value="1879">1879</option>
                                    <option value="1878">1878</option>
                                    <option value="1877">1877</option>
                                    <option value="1876">1876</option>
                                    <option value="1875">1875</option>
                                    <option value="1874">1874</option>
                                    <option value="1873">1873</option>
                                    <option value="1872">1872</option>
                                    <option value="1871">1871</option>
                                    <option value="1870">1870</option>
                                    <option value="1869">1869</option>
                                    <option value="1868">1868</option>
                                    <option value="1867">1867</option>
                                    <option value="1866">1866</option>
                                    <option value="1865">1865</option>
                                    <option value="1864">1864</option>
                                    <option value="1863">1863</option>
                                    <option value="1862">1862</option>
                                    <option value="1861">1861</option>
                                    <option value="1860">1860</option>
                                    <option value="1859">1859</option>
                                    <option value="1858">1858</option>
                                    <option value="1857">1857</option>
                                    <option value="1856">1856</option>
                                    <option value="1855">1855</option>
                                    <option value="1854">1854</option>
                                    <option value="1853">1853</option>
                                    <option value="1852">1852</option>
                                    <option value="1851">1851</option>
                                    <option value="1850">1850</option>
                                    <option value="1849">1849</option>
                                    <option value="1848">1848</option>
                                    <option value="1847">1847</option>
                                    <option value="1846">1846</option>
                                    <option value="1845">1845</option>
                                    <option value="1844">1844</option>
                                    <option value="1843">1843</option>
                                    <option value="1842">1842</option>
                                    <option value="1841">1841</option>
                                    <option value="1840">1840</option>
                                    <option value="1839">1839</option>
                                    <option value="1838">1838</option>
                                    <option value="1837">1837</option>
                                    <option value="1836">1836</option>
                                    <option value="1835">1835</option>
                                    <option value="1834">1834</option>
                                    <option value="1833">1833</option>
                                    <option value="1832">1832</option>
                                    <option value="1831">1831</option>
                                    <option value="1830">1830</option>
                                    <option value="1829">1829</option>
                                    <option value="1828">1828</option>
                                    <option value="1827">1827</option>
                                    <option value="1826">1826</option>
                                    <option value="1825">1825</option>
                                    <option value="1824">1824</option>
                                    <option value="1823">1823</option>
                                    <option value="1822">1822</option>
                                    <option value="1821">1821</option>
                                    <option value="1820">1820</option>
                                    <option value="1819">1819</option>
                                    <option value="1818">1818</option>
                                    <option value="1817">1817</option>
                                    <option value="1816">1816</option>
                                    <option value="1815">1815</option>
                                    <option value="1814">1814</option>
                                    <option value="1813">1813</option>
                                    <option value="1812">1812</option>
                                    <option value="1811">1811</option>
                                    <option value="1810">1810</option>
                                    <option value="1809">1809</option>
                                    <option value="1808">1808</option>
                                    <option value="1807">1807</option>
                                    <option value="1806">1806</option>
                                    <option value="1805">1805</option>
                                    <option value="1804">1804</option>
                                    <option value="1803">1803</option>
                                    <option value="1802">1802</option>
                                    <option value="1801">1801</option>
                                    <option value="1800">1800</option>

                                </select>
                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pwd" id="HoTenVo">Họ tên vợ:</label>
                                <input name="ctl00$Content$Create1$txtHotenvohoacchong" type="text" maxlength="120" id="Content_Create1_txtHotenvohoacchong" class="form-control CapLock" />

                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label for="pwd">Ngày sinh:
                                <div class="checkbox-inline">
                                    <label><input type="checkbox" id="NamVoChong" name="NamVoChong" class="ChiCoNamSinh">Chỉ có năm sinh</label>
                                </div>
                            </label>
                            <input name="ctl00$Content$Create1$txtNgaysinhvohoacchong" type="text" id="Content_Create1_txtNgaysinhvohoacchong" class="form-control Date" />
                            <select name="ctl00$Content$Create1$ddlNgaysinhvohoacchong" id="Content_Create1_ddlNgaysinhvohoacchong" class="form-control ddlYear" style="display:none">
                                <option value="">---Chọn---</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                                <option value="1929">1929</option>
                                <option value="1928">1928</option>
                                <option value="1927">1927</option>
                                <option value="1926">1926</option>
                                <option value="1925">1925</option>
                                <option value="1924">1924</option>
                                <option value="1923">1923</option>
                                <option value="1922">1922</option>
                                <option value="1921">1921</option>
                                <option value="1920">1920</option>
                                <option value="1919">1919</option>
                                <option value="1918">1918</option>
                                <option value="1917">1917</option>
                                <option value="1916">1916</option>
                                <option value="1915">1915</option>
                                <option value="1914">1914</option>
                                <option value="1913">1913</option>
                                <option value="1912">1912</option>
                                <option value="1911">1911</option>
                                <option value="1910">1910</option>
                                <option value="1909">1909</option>
                                <option value="1908">1908</option>
                                <option value="1907">1907</option>
                                <option value="1906">1906</option>
                                <option value="1905">1905</option>
                                <option value="1904">1904</option>
                                <option value="1903">1903</option>
                                <option value="1902">1902</option>
                                <option value="1901">1901</option>
                                <option value="1900">1900</option>
                                <option value="1899">1899</option>
                                <option value="1898">1898</option>
                                <option value="1897">1897</option>
                                <option value="1896">1896</option>
                                <option value="1895">1895</option>
                                <option value="1894">1894</option>
                                <option value="1893">1893</option>
                                <option value="1892">1892</option>
                                <option value="1891">1891</option>
                                <option value="1890">1890</option>
                                <option value="1889">1889</option>
                                <option value="1888">1888</option>
                                <option value="1887">1887</option>
                                <option value="1886">1886</option>
                                <option value="1885">1885</option>
                                <option value="1884">1884</option>
                                <option value="1883">1883</option>
                                <option value="1882">1882</option>
                                <option value="1881">1881</option>
                                <option value="1880">1880</option>
                                <option value="1879">1879</option>
                                <option value="1878">1878</option>
                                <option value="1877">1877</option>
                                <option value="1876">1876</option>
                                <option value="1875">1875</option>
                                <option value="1874">1874</option>
                                <option value="1873">1873</option>
                                <option value="1872">1872</option>
                                <option value="1871">1871</option>
                                <option value="1870">1870</option>
                                <option value="1869">1869</option>
                                <option value="1868">1868</option>
                                <option value="1867">1867</option>
                                <option value="1866">1866</option>
                                <option value="1865">1865</option>
                                <option value="1864">1864</option>
                                <option value="1863">1863</option>
                                <option value="1862">1862</option>
                                <option value="1861">1861</option>
                                <option value="1860">1860</option>
                                <option value="1859">1859</option>
                                <option value="1858">1858</option>
                                <option value="1857">1857</option>
                                <option value="1856">1856</option>
                                <option value="1855">1855</option>
                                <option value="1854">1854</option>
                                <option value="1853">1853</option>
                                <option value="1852">1852</option>
                                <option value="1851">1851</option>
                                <option value="1850">1850</option>
                                <option value="1849">1849</option>
                                <option value="1848">1848</option>
                                <option value="1847">1847</option>
                                <option value="1846">1846</option>
                                <option value="1845">1845</option>
                                <option value="1844">1844</option>
                                <option value="1843">1843</option>
                                <option value="1842">1842</option>
                                <option value="1841">1841</option>
                                <option value="1840">1840</option>
                                <option value="1839">1839</option>
                                <option value="1838">1838</option>
                                <option value="1837">1837</option>
                                <option value="1836">1836</option>
                                <option value="1835">1835</option>
                                <option value="1834">1834</option>
                                <option value="1833">1833</option>
                                <option value="1832">1832</option>
                                <option value="1831">1831</option>
                                <option value="1830">1830</option>
                                <option value="1829">1829</option>
                                <option value="1828">1828</option>
                                <option value="1827">1827</option>
                                <option value="1826">1826</option>
                                <option value="1825">1825</option>
                                <option value="1824">1824</option>
                                <option value="1823">1823</option>
                                <option value="1822">1822</option>
                                <option value="1821">1821</option>
                                <option value="1820">1820</option>
                                <option value="1819">1819</option>
                                <option value="1818">1818</option>
                                <option value="1817">1817</option>
                                <option value="1816">1816</option>
                                <option value="1815">1815</option>
                                <option value="1814">1814</option>
                                <option value="1813">1813</option>
                                <option value="1812">1812</option>
                                <option value="1811">1811</option>
                                <option value="1810">1810</option>
                                <option value="1809">1809</option>
                                <option value="1808">1808</option>
                                <option value="1807">1807</option>
                                <option value="1806">1806</option>
                                <option value="1805">1805</option>
                                <option value="1804">1804</option>
                                <option value="1803">1803</option>
                                <option value="1802">1802</option>
                                <option value="1801">1801</option>
                                <option value="1800">1800</option>

                            </select>
                        </div>

                    </div>

                    <div class="row HeaderRow">
                        <h4>LÝ DO CẤP HỘ CHIẾU</h4>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pwd">Nội dung đề nghị:<span class="fieldRequired">&nbsp;</span></label>
                                <select name="ctl00$Content$Create1$ddlNoiDungDeNgheId" id="Content_Create1_ddlNoiDungDeNgheId" class="form-control">
                                    <option value="">---Chọn---</option>
                                    <option value="Đề nghị cấp hộ chiếu lần đầu">Đề nghị cấp hộ chiếu lần đầu</option>
                                    <option value="Đề nghị cấp lại hộ chiếu">Đề nghị cấp lại hộ chiếu</option>
                                    <option value="Đề nghị điều chỉnh thông tin hộ chiếu">Đề nghị điều chỉnh th&#244;ng tin hộ chiếu</option>
                                    <option value="Đề nghị bổ sung con dưới 9 tuổi vào hộ chiếu cha/mẹ">Đề nghị bổ sung con dưới 9 tuổi v&#224;o hộ chiếu cha/mẹ</option>
                                    <option value="Đề nghị sửa nơi sinh trong hộ chiếu">Đề nghị sửa nơi sinh trong hộ chiếu</option>
                                    <option value="Đề nghị khác">Đề nghị kh&#225;c</option>
                                    <option value="Tách hộ chiếu">T&#225;ch hộ chiếu</option>
                                    <option value="Cấp lại hộ chiếu do mât">Cấp lại hộ chiếu do m&#226;t</option>

                                </select>
                                <textarea name="ctl00$Content$Create1$txtNoiDungDeNghiKhac" rows="2" cols="20" id="Content_Create1_txtNoiDungDeNghiKhac" class="form-control" placeholder="Nội dung đề nghị" style="display:none">
                                </textarea>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h4>THÔNG TIN HỘ CHIẾU CŨ (nếu có)</h4>
                    </div>
                    <div class="row SoHoHieuCu">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pwd">Số hộ chiếu cũ:</label>
                                <input name="ctl00$Content$Create1$txtSohcgannhat" type="text" id="Content_Create1_txtSohcgannhat" class="form-control" />

                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label for="pwd">Cấp ngày:</label>
                            <input name="ctl00$Content$Create1$txtNgaycaphcgannhat" type="text" id="Content_Create1_txtNgaycaphcgannhat" class="form-control Date Ngaycaphcgannhat" />
                        </div>

                    </div>

                    <div class="row" style="margin:0px 0px 0px 10px;">
                        <div class="form-group">
                            <label class="checkbox-inline"><input type ="checkbox"  class="AcceptedAgreement" />Tôi xin chịu trách nhiệm trước pháp luật về lời khai trên.</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4" style="margin:0px 0px 0px 3px;">
                            <input type="submit" name="ctl00$Content$Create1$btnSave" value=" Lưu " id="Content_Create1_btnSave" class="btn" style="height: 26px" />
                            &nbsp;
                        </div>
                    </div>
                </form>
            </div>

            <div style="display: none">

                <select name="ctl00$Content$Create1$ddlNgaySinh" id="Content_Create1_ddlNgaySinh">

                </select>
                <input type="hidden" name="ctl00$Content$Create1$hidID" id="Content_Create1_hidID" value="0" />
                <input type="hidden" name="ctl00$Content$Create1$hidTypeId" id="Content_Create1_hidTypeId" value="1" />
                <input name="ctl00$Content$Create1$txtValidCMND" type="text" value="27/04/2003" id="Content_Create1_txtValidCMND" />
                <input name="ctl00$Content$Create1$txtDeNghi" type="text" id="Content_Create1_txtDeNghi" />
            </div>


        </div>



    </div>
    <footer>
        <p>&copy; 2016 - ĐĂNG KÝ HỒ SƠ ĐỀ NGHỊ CẤP, ĐỔI HỘ CHIẾU QUA MẠNG</p>
    </footer>


    <script type="text/javascript">
        //<![CDATA[
        Sys.Application.add_load(function () {
            ajaxJquery();
        });//]]>
    </script>
</form>
<script type="text/javascript" src="http://kbtt.catphcm.bocongan.gov.vn/hochieu/Scripts/jquery.min.js"></script>
<script type="text/javascript" src="http://kbtt.catphcm.bocongan.gov.vn/hochieu/Scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="http://kbtt.catphcm.bocongan.gov.vn/hochieu/Scripts/jquery-ui.min.js"></script>
<script type="text/javascript">
        var widId = "";
        var onloadCallback = function () {
            widId = grecaptcha.render('recapchaWidget', {
                'sitekey': '6Lc1iSgTAAAAAJxqacYHbL0qI0NiBpXj1stqXAHn'
            });
        };
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
