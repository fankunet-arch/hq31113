<?php
/**
 * Toptea HQ - POS Member Settings View
 * Engineer: Gemini | Date: 2025-10-28
 *
 * [P4/P2] Added:
 * - Added Pass Redemption Settings card for pass_free_addon_limit
 */
?>
<div class="row justify-content-center">
    <div class="col-lg-8">
        <form id="member-settings-form">
            <div class="card mb-4">
                <div class="card-header">
                    积分赚取规则
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="euros_per_point" class="form-label">每获得 1 积分需要消费的欧元金额</label>
                        <div class="input-group">
                            <span class="input-group-text">€</span>
                            <input type="number" step="0.01" min="0.01" class="form-control" id="euros_per_point" name="points_euros_per_point" required>
                             <span class="input-group-text">= 1 积分</span>
                        </div>
                        <div class="form-text">例如：输入 `1.00` 表示消费 1 欧元获得 1 积分。输入 `0.50` 表示消费 0.5 欧元获得 1 积分。</div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    次卡核销设置 (P2)
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="pass_free_addon_limit" class="form-label">免费加料上限 (每杯)</label>
                        <input type="number" step="1" min="0" class="form-control" id="pass_free_addon_limit" name="pass_free_addon_limit" required>
                        <div class="form-text">
                            定义次卡核销时，每杯饮品最多可享受的免费加料(free_addon)份数。
                            <br>
                            输入 `0` 表示不限制。
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end mt-4">
                <button type="submit" class="btn btn-primary"><i class="bi bi-save me-2"></i>保存设置</button>
            </div>
        </form>
        <div id="settings-feedback" class="mt-3"></div>
    </div>
</div>