Dir.glob("**/item.md.bak").each do |f|
    `rm "#{f}"`
end
