require 'test_helper'

class BenefitsControllerTest < ActionDispatch::IntegrationTest
  test "should get index" do
    get benefits_index_url
    assert_response :success
  end

end
