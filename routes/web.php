<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/admin/login', function () {
//     return view('admin.auth.login');
// });
Route::get('test', function () {
    return view('test.test');
})->name('test');
Route::prefix('admin')->group(function () {
    Route::get('login', function () {
        return view('admin.auth.login');
    })->name('login');

    Route::get('register', function () {
        return view('admin.auth.register');
    })->name('register');

    Route::get('forgot-password', function () {
        return view('admin.auth.forgot-password');
    })->name('forgot-password');

    Route::get('verification', function () {
        return view('admin.auth.verification');
    })->name('verification');

    Route::get('reset-password', function () {
        return view('admin.auth.reset-password');
    })->name('reset-password');

    Route::get('index', function () {
        return view('admin.index');
    })->name('index');

    Route::get('profile', function () {
        return view('admin.account.profile');
    })->name('profile');

    Route::get('setting', function () {
        return view('admin.account.setting');
    })->name('setting');

    Route::get('security', function () {
        return view('admin.account.security');
    })->name('security');

    Route::get('referrals', function () {
        return view('admin.account.referrals');
    })->name('referrals');

    Route::prefix('pages/management')->group(function () {
        // For Sub Admins
        Route::prefix('/sub_admin')->group(function () {
            Route::get('list', function () {
                return view('admin.pages.management.sub_admin.list');
            })->name('management.sub_admin.list');

            Route::get('view', function () {
                return view('admin.pages.management.sub_admin.view');
            })->name('management.sub_admin.view');

            // Roles
            Route::prefix('/roles')->group(function () {
                Route::get('list', function () {
                    return view('admin.pages.management.sub_admin.roles.list');
                })->name('management.sub_admin.roles.list');

                Route::get('view', function () {
                    return view('admin.pages.management.sub_admin.roles.view');
                })->name('management.sub_admin.roles.view');
            });

            // Permissions
            Route::prefix('/permissions')->group(function () {
                Route::get('list', function () {
                    return view('admin.pages.management.sub_admin.permissions.list');
                })->name('management.sub_admin.permissions.list');
            });
        });
        // For Vendors
        Route::prefix('/vendor')->group(function () {
            Route::get('list', function () {
                return view('admin.pages.management.vendor.list');
            })->name('management.vendor.list');

            Route::get('view', function () {
                return view('admin.pages.management.vendor.view');
            })->name('management.vendor.view');

            // Products
            Route::prefix('/products')->group(function () {
                Route::get('edit', function () {
                    return view('admin.pages.management.vendor.products.edit');
                })->name('management.vendor.products.edit');
            });

            // Roles
            Route::prefix('/roles')->group(function () {
                Route::get('list', function () {
                    return view('admin.pages.management.vendor.roles.list');
                })->name('management.vendor.roles.list');

                Route::get('view', function () {
                    return view('admin.pages.management.vendor.roles.view');
                })->name('management.vendor.roles.view');
            });

            // Permissions
            Route::prefix('/permissions')->group(function () {
                Route::get('list', function () {
                    return view('admin.pages.management.vendor.permissions.list');
                })->name('management.vendor.permissions.list');
            });
        });

        // User management
        Route::prefix('/user_management')->group(function () {
            Route::get('list', function () {
                return view('admin.pages.management.user_management.list');
            })->name('management.user_management.list');
            Route::get('view', function () {
                return view('admin.pages.management.user_management.view');
            })->name('management.user_management.view');
        });

        // Document verification
        Route::prefix('/document_verification')->group(function () {
            Route::get('user', function () {
                return view('admin.pages.management.document_verification.user');
            })->name('management.document_verification.user');
            Route::get('vendor', function () {
                return view('admin.pages.management.document_verification.vendor');
            })->name('management.document_verification.vendor');
            Route::get('admin', function () {
                return view('admin.pages.management.document_verification.admin');
            })->name('management.document_verification.admin');
        });
    });

    // Marketplace
    Route::prefix('pages/marketplace')->group(function () {
        Route::prefix('/listing')->group(function () {
            Route::get('list', function () {
                return view('admin.pages.marketplace.listing.list');
            })->name('marketplace.marketplace.list');

            // For Item
            Route::prefix('/item')->group(function () {
                Route::get('manage', function () {
                    return view('admin.pages.marketplace.listing.item.manage');
                })->name('marketplace.marketplace.item.manage');
            });
            // For Vehicle
            Route::prefix('/vehicle')->group(function () {
                Route::get('manage', function () {
                    return view('admin.pages.marketplace.listing.vehicle.manage');
                })->name('marketplace.marketplace.vehicle.manage');
            });
            // For Property
            Route::prefix('/property')->group(function () {
                Route::get('manage', function () {
                    return view('admin.pages.marketplace.listing.property.manage');
                })->name('marketplace.marketplace.property.manage');
            });
        });

        Route::prefix('/category')->group(function () {
            Route::get('list', function () {
                return view('admin.pages.marketplace.category.list');
            })->name('marketplace.category.list');

            Route::get('create', function () {
                return view('admin.pages.marketplace.category.create');
            })->name('marketplace.category.create');
        });

        Route::prefix('/attribute')->group(function () {
            Route::get('list', function () {
                return view('admin.pages.marketplace.attribute.list');
            })->name('marketplace.attribute.list');

            Route::get('create', function () {
                return view('admin.pages.marketplace.attribute.create');
            })->name('marketplace.attribute.create');
        });

        Route::prefix('/type')->group(function () {
            Route::get('list', function () {
                return view('admin.pages.marketplace.type.list');
            })->name('marketplace.type.list');

            Route::get('create', function () {
                return view('admin.pages.marketplace.type.create');
            })->name('marketplace.type.create');
        });
    });

    // Crafted & Tools
    Route::prefix('pages/crafted_tools')->group(function () {
        Route::prefix('/document')->group(function () {
            Route::get('list', function () {
                return view('admin.pages.crafted_tools.document.list');
            })->name('crafted_tools.document.list');
            Route::get('create', function () {
                return view('admin.pages.crafted_tools.document.create');
            })->name('crafted_tools.document.create');
            Route::get('country_list', function () {
                return view('admin.pages.crafted_tools.document.country_list');
            })->name('crafted_tools.document.country_list');
        });

        Route::prefix('/currency')->group(function () {
            Route::get('list', function () {
                return view('admin.pages.crafted_tools.currency.list');
            })->name('crafted_tools.currency.list');
            Route::get('create', function () {
                return view('admin.pages.crafted_tools.currency.create');
            })->name('crafted_tools.currency.create');
            Route::get('country_list', function () {
                return view('admin.pages.crafted_tools.currency.country_list');
            })->name('crafted_tools.currency.country_list');
        });

        Route::prefix('/mailing')->group(function () {
            Route::get('manage', function () {
                return view('admin.pages.crafted_tools.mailing.manage');
            })->name('crafted_tools.mailing.manage');
            Route::get('reply', function () {
                return view('admin.pages.crafted_tools.mailing.reply');
            })->name('crafted_tools.mailing.reply');
            Route::get('create', function () {
                return view('admin.pages.crafted_tools.mailing.create');
            })->name('crafted_tools.mailing.create');
        });

        Route::prefix('/notification')->group(function () {
            Route::get('app_notification', function () {
                return view('admin.pages.crafted_tools.notification.app_notification');
            })->name('crafted_tools.notification.app_notification');
        });

        Route::prefix('/communication')->group(function () {
            Route::get('announcement', function () {
                return view('admin.pages.crafted_tools.communication.announcement');
            })->name('crafted_tools.communication.announcement');
            Route::get('send_announcement', function () {
                return view('admin.pages.crafted_tools.communication.send_announcement');
            })->name('crafted_tools.communication.send_announcement');
            Route::get('create_announcement', function () {
                return view('admin.pages.crafted_tools.communication.create_announcement');
            })->name('crafted_tools.communication.create_announcement');
            
        });
    });

    // Settings
    Route::prefix('pages/setting')->group(function () {
        Route::prefix('/general_setting')->group(function () {
            Route::get('manage', function () {
                return view('admin.pages.setting.general_setting.manage');
            })->name('setting.general_setting.manage');
        });
        Route::prefix('/payment_setting')->group(function () {
            Route::get('manage', function () {
                return view('admin.pages.setting.payment_setting.manage');
            })->name('setting.payment_setting.manage');
        });
        Route::prefix('/style_setting')->group(function () {
            Route::get('manage', function () {
                return view('admin.pages.setting.style_setting.manage');
            })->name('setting.style_setting.manage');
        });
        Route::prefix('/enquiry_setting')->group(function () {
            Route::get('manage', function () {
                return view('admin.pages.setting.enquiry_setting.manage');
            })->name('setting.enquiry_setting.manage');
        });
        Route::prefix('/user_setting')->group(function () {
            Route::get('manage', function () {
                return view('admin.pages.setting.user_setting.manage');
            })->name('setting.user_setting.manage');
        });
        Route::prefix('/vendor_setting')->group(function () {
            Route::get('manage', function () {
                return view('admin.pages.setting.vendor_setting.manage');
            })->name('setting.vendor_setting.manage');
        });
        Route::prefix('/advanced_setting')->group(function () {
            Route::get('manage', function () {
                return view('admin.pages.setting.advanced_setting.manage');
            })->name('setting.advanced_setting.manage');
        });
        Route::prefix('/mobile_setting')->group(function () {
            Route::get('manage', function () {
                return view('admin.pages.setting.mobile_setting.manage');
            })->name('setting.mobile_setting.manage');
        });
        Route::prefix('/email_setting')->group(function () {
            Route::get('manage', function () {
                return view('admin.pages.setting.email_setting.manage');
            })->name('setting.email_setting.manage');
        });
        Route::prefix('/sms_setting')->group(function () {
            Route::get('manage', function () {
                return view('admin.pages.setting.sms_setting.manage');
            })->name('setting.sms_setting.manage');
        });
        Route::prefix('/support_setting')->group(function () {
            Route::get('manage', function () {
                return view('admin.pages.setting.support_setting.manage');
            })->name('setting.support_setting.manage');
        });
        Route::prefix('/company_setting')->group(function () {
            Route::get('manage', function () {
                return view('admin.pages.setting.company_setting.manage');
            })->name('setting.company_setting.manage');
        });
        Route::prefix('/theme_setting')->group(function () {
            Route::get('manage', function () {
                return view('admin.pages.setting.theme_setting.manage');
            })->name('setting.theme_setting.manage');
        });
        Route::prefix('/transaction_setting')->group(function () {
            Route::get('manage', function () {
                return view('admin.pages.setting.transaction_setting.manage');
            })->name('setting.transaction_setting.manage');
        });
        Route::prefix('/notification_setting')->group(function () {
            Route::get('notification_template', function () {
                return view('admin.pages.setting.notification_setting.notification_template');
            })->name('setting.notification_setting.notification_template');
            Route::get('view_template', function () {
                return view('admin.pages.setting.notification_setting.view_template');
            })->name('setting.notification_setting.view_template');
        });
        Route::prefix('/location_setting')->group(function () {
            Route::prefix('/country')->group(function () {
                Route::get('manage', function () {
                    return view('admin.pages.setting.location_setting.country.manage');
                })->name('setting.location_setting.country.manage');
                Route::get('create', function () {
                    return view('admin.pages.setting.location_setting.country.create');
                })->name('setting.location_setting.country.create');
            });
            Route::prefix('/state')->group(function () {
                Route::get('manage', function () {
                    return view('admin.pages.setting.location_setting.state.manage');
                })->name('setting.location_setting.state.manage');
                Route::get('create', function () {
                    return view('admin.pages.setting.location_setting.state.create');
                })->name('setting.location_setting.state.create');
            });
            Route::prefix('/city')->group(function () {
                Route::get('manage', function () {
                    return view('admin.pages.setting.location_setting.city.manage');
                })->name('setting.location_setting.city.manage');
                Route::get('create', function () {
                    return view('admin.pages.setting.location_setting.city.create');
                })->name('setting.location_setting.city.create');
            });
        });
    });
});

Route::prefix('admin/ajax')->group(function () {
    Route::get('/user_management/json', function () {
        return view('admin.ajax.user_management.json');
    })->name('ajax.user_management.json');
    Route::get('/category/json', function () {
        return view('admin.ajax.category.json');
    })->name('ajax.category.json');
    Route::get('/attribute/json', function () {
        return view('admin.ajax.attribute.json');
    })->name('ajax.attribute.json');
    Route::get('/type/json', function () {
        return view('admin.ajax.type.json');
    })->name('ajax.type.json');
    Route::get('/document/json', function () {
        return view('admin.ajax.document.json');
    })->name('ajax.document.json');
    Route::get('/document/country/json', function () {
        return view('admin.ajax.document.country.json');
    })->name('ajax.document.country.json');
    Route::get('/currency/json', function () {
        return view('admin.ajax.currency.json');
    })->name('ajax.currency.json');
    Route::get('/currency/country/json', function () {
        return view('admin.ajax.currency.country.json');
    })->name('ajax.currency.country.json');
    Route::get('/mail/json', function () {
        return view('admin.ajax.mail.json');
    })->name('ajax.mail.json');
    Route::get('/vendor/json', function () {
        return view('admin.ajax.vendor.json');
    })->name('ajax.vendor.json');
    Route::get('/vendor/view/json', function () {
        return view('admin.ajax.vendor.view.json');
    })->name('ajax.vendor.view.json');
    Route::get('/location/country/json', function () {
        return view('admin.ajax.location.country.json');
    })->name('ajax.location.country.json');
    Route::get('/location/state/json', function () {
        return view('admin.ajax.location.state.json');
    })->name('ajax.location.state.json');
    Route::get('/location/city/json', function () {
        return view('admin.ajax.location.city.json');
    })->name('ajax.location.city.json');
    Route::get('/communication/announcement/filter/json', function () {
        return view('admin.ajax.communication.announcement.filter.json');
    })->name('ajax.communication.announcement.filter.json');
});
